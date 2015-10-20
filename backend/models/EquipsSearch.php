<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Equips;
// use backend\models\Users;

/**
 * EquipsSearch represents the model behind the search form about `backend\models\Equips`.
 */
class EquipsSearch extends Equips
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eq_id', 'user_id', 'last_user_id'], 'integer'],
            [['eq_type', 'eq_inv', 'eq_desc', 'eq_pass', 'eq_boot', 'status', 'eq_update'], 'safe'],
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
            'user_id' => $this->user_id,
            'last_user_id' => $this->last_user_id,
            'eq_update' => $this->eq_update,
        ]);

        $query->andFilterWhere(['like', 'eq_type', $this->eq_type])
            ->andFilterWhere(['like', 'eq_inv', $this->eq_inv])
            ->andFilterWhere(['like', 'eq_desc', $this->eq_desc])
            ->andFilterWhere(['like', 'eq_pass', $this->eq_pass])
            ->andFilterWhere(['like', 'eq_boot', $this->eq_boot])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
