<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Eq;
use frontend\models\Userlite;

/**
 * EqSearch represents the model behind the search form about `frontend\models\Eq`.
 */
class EqSearch extends Eq
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eq_id'], 'integer'],
            [['bs_pass', 'user_id', 'eq_type', 'eq_desc', 'eq_inv'], 'safe'],
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
        $query = Eq::find();


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('user');

        $query->andFilterWhere([
            'eq_id' => $this->eq_id,
//             'user_id' => $this->user_id,
        ]);


        $query->andFilterWhere(['like', 'bs_pass', $this->bs_pass])
            ->andFilterWhere(['like', 'eq_type', $this->eq_type])
            ->andFilterWhere(['like', 'eq_desc', $this->eq_desc])
            ->andFilterWhere(['like', 'eq_inv', $this->eq_inv])
            ->andFilterWhere(['like', 'tbl_user.lname', $this->user_id]);
//             ->andFilterWhere(['like', 'tbl_user.lname', Pupkin]);
//             ->andFilterWhere(['like', 'tbl_user.lname', $this->user_id]);

        return $dataProvider;
    }
}
