<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaymentDetails;

/**
 * PaymentDetailsSearch represents the model behind the search form of `app\models\PaymentDetails`.
 */
class PaymentDetailsSearch extends PaymentDetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'payment_id', 'bill_id', 'amount_paid', 'installment_no', 'created_by', 'updated_by'], 'integer'],
            [['principal_amount', 'interest'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
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
        $query = PaymentDetails::find();

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
            'payment_id' => $this->payment_id,
            'bill_id' => $this->bill_id,
            'amount_paid' => $this->amount_paid,
            'installment_no' => $this->installment_no,
            'principal_amount' => $this->principal_amount,
            'interest' => $this->interest,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        return $dataProvider;
    }
}
