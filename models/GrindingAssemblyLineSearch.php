<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GrindingAssemblyLine;

/**
 * GrindingAssemblyLineSearch represents the model behind the search form of `app\models\GrindingAssemblyLine`.
 */
class GrindingAssemblyLineSearch extends GrindingAssemblyLine
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'shift_type', 'qunatity_a', 'qunatity_b', 'actual_yp8', 'actual_yp7', 'actual_20m', 'actual_yra', 'actual_ytbr', 'line_stop', 'engineering', 'adjustment', 'co', 'material_storage', 'bd', 'other', 'total', 'bekidou', 'pph', 'chokko'], 'integer'],
            [['report_date'], 'safe'],
            [['cum_gap', 'cum_achive'], 'number'],
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
        $query = GrindingAssemblyLine::find();

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
            'report_date' => $this->report_date,
            'shift_type' => $this->shift_type,
            'qunatity_a' => $this->qunatity_a,
            'qunatity_b' => $this->qunatity_b,
            'actual_yp8' => $this->actual_yp8,
            'actual_yp7' => $this->actual_yp7,
            'actual_20m' => $this->actual_20m,
            'actual_yra' => $this->actual_yra,
            'actual_ytbr' => $this->actual_ytbr,
            'cum_gap' => $this->cum_gap,
            'cum_achive' => $this->cum_achive,
            'line_stop' => $this->line_stop,
            'engineering' => $this->engineering,
            'adjustment' => $this->adjustment,
            'co' => $this->co,
            'material_storage' => $this->material_storage,
            'bd' => $this->bd,
            'other' => $this->other,
            'total' => $this->total,
            'bekidou' => $this->bekidou,
            'pph' => $this->pph,
            'chokko' => $this->chokko,
        ]);

        return $dataProvider;
    }
}
