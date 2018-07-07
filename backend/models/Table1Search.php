<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Table1;

/**
 * Table1Search represents the model behind the search form of `backend\models\Table1`.
 */
class Table1Search extends Table1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Column 1', 'Column 2', 'Column 3'], 'integer'],
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
        $query = Table1::find();

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
            'Column 1' => $this->Column 1,
            'Column 2' => $this->Column 2,
            'Column 3' => $this->Column 3,
        ]);

        return $dataProvider;
    }
}
