<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vision;

/**
 * VisionSearch represents the model behind the search form of `app\models\Vision`.
 */
class VisionSearch extends Vision
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['vision_statement', 'mission_statement', 'vision_title', 'mission_title'], 'safe'],
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
        $query = Vision::find();

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
        ]);

        $query->andFilterWhere(['like', 'vision_statement', $this->vision_statement])
            ->andFilterWhere(['like', 'mission_statement', $this->mission_statement])
            ->andFilterWhere(['like', 'vision_title', $this->vision_title])
            ->andFilterWhere(['like', 'mission_title', $this->mission_title]);

        return $dataProvider;
    }
}
