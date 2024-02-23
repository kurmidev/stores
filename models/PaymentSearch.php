<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Payment;

/**
 * PaymentSearch represents the model behind the search form of `app\models\Payment`.
 */
class PaymentSearch extends Payment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bill_id', 'created_by', 'updated_by'], 'integer'],
            [['receipt_no', 'instrument_no', 'instrument_date', 'instrument_name', 'created_at', 'updated_at'], 'safe'],
            [['amount', 'amount_received'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Payment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'bill_id' => $this->bill_id,
            'amount' => $this->amount,
            'amount_received' => $this->amount_received,
            'instrument_date' => $this->instrument_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'receipt_no', $this->receipt_no])
            ->andFilterWhere(['like', 'instrument_no', $this->instrument_no])
            ->andFilterWhere(['like', 'instrument_name', $this->instrument_name]);

        return $dataProvider;
    }
}
