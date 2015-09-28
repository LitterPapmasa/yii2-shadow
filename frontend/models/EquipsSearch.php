<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Equips;

/**
 * EquipsSearch represents the model behind the search form about `app\models\Equips`.
 */
class EquipsSearch extends Equips
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eq_id'], 'integer'],
            [['pass', 'eq_inv', 'eq_type', 'describe', 'change_date', 'eq_created', 'user_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Equips::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'eq_id' => $this->eq_id,
            'change_date' => $this->change_date,
            'eq_created' => $this->eq_created,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'eq_inv', $this->eq_inv])
            ->andFilterWhere(['like', 'eq_type', $this->eq_type])
            ->andFilterWhere(['like', 'describe', $this->describe])
        	;
//         	->andFilterWhere(['like', '', $this->describe])
//         	->andFilterWhere(['like', 'describe', $this->describe])
//         	->andFilterWhere(['like', 'describe', $this->describe]);

        return $dataProvider;
    }
}
