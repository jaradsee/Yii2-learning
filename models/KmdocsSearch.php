<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Kmdocs;

/**
 * KmdocsSearch represents the model behind the search form of `app\models\Kmdocs`.
 */
class KmdocsSearch extends Kmdocs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'typeteam', 'typedocs'], 'integer'],
            [['ref', 'title', 'uploader', 'covenant', 'docs', 'upload_date', 'end_date', 'success_date', 'create_date'], 'safe'],
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
        $query = Kmdocs::find();

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
            'typeteam' => $this->typeteam,
            'typedocs' => $this->typedocs,
            'upload_date' => $this->upload_date,
            'end_date' => $this->end_date,
            'success_date' => $this->success_date,
            'create_date' => $this->create_date,
        ]);

        $query->andFilterWhere(['like', 'ref', $this->ref])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'uploader', $this->uploader])
            ->andFilterWhere(['like', 'covenant', $this->covenant])
            ->andFilterWhere(['like', 'docs', $this->docs]);

        return $dataProvider;
    }
}
