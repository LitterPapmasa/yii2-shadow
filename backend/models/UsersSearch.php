<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Users;
use backend\models\Equips;

/**
 * UsersSearch represents the model behind the search form about `backend\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
	public $inventars, $pass;
	
    public function rules()
    {
        return [
            [[], 'integer'],
            [['user_id','fname', 'lname', 'company', 'user_status', 'date_create', 'inventars'], 'safe'],
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
        $query = Users::find();
	
        $query->joinWith('equips');
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        	'sort' => [
        				'defaultOrder' => [
        						'lname' => SORT_ASC,
        						'fname' => SORT_ASC,
        						'company' => SORT_ASC,
        				]
        	]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        
        $query->andFilterWhere([
            'user_id' => $this->user_id,
            'date_create' => $this->date_create,
        ]);

        $query->andFilterWhere(['like', 'fname', $this->fname])
            ->andFilterWhere(['like', 'lname', $this->lname])
            ->andFilterWhere(['like', 'company', $this->company])
            
            ->andFilterWhere(['like', 'equips.eq_pass', $this->pass])
            ->andFilterWhere(['like', 'tbl_equips.eq_inv', $this->inventars])
            ->andFilterWhere(['like', 'user_status', $this->user_status]);

        return $dataProvider;
    }
}
