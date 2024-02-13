<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CustomerBillDetails;

/**
 * CustomerBillDetailsSearch represents the model behind the search form of `app\models\CustomerBillDetails`.
 */
class CustomerBillDetailsSearch extends CustomerBillDetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bill_id', 'customer_id', 'product_id', 'quantity', 'discount_type', 'created_by', 'updated_by'], 'integer'],
            [['serial_number', 'product_name', 'warranty_end_date', 'created_at', 'updated_at'], 'safe'],
            [['rate', 'discount', 'amount', 'tax', 'total_price'], 'number'],
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
        $query = CustomerBillDetails::find();

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
            'customer_id' => $this->customer_id,
            'product_id' => $this->product_id,
            'rate' => $this->rate,
            'warranty_end_date' => $this->warranty_end_date,
            'quantity' => $this->quantity,
            'discount' => $this->discount,
            'discount_type' => $this->discount_type,
            'amount' => $this->amount,
            'tax' => $this->tax,
            'total_price' => $this->total_price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'serial_number', $this->serial_number])
            ->andFilterWhere(['like', 'product_name', $this->product_name]);

        return $dataProvider;
    }
}
