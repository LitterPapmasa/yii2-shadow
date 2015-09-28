<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Wifi;

/**
 * WifiSearch represents the model behind the search form about `backend\models\Wifi`.
 */
class WifiSearch extends Wifi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dev_id'], 'integer'],
            [['ssid', 'pass', 'dev_login', 'dev_pass', 'reboot_url', 'comment', 'date_create', 'show'], 'safe'],
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
        $query = Wifi::find();

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
            'dev_id' => $this->dev_id,
            'date_create' => $this->date_create,
        ]);

        $query->andFilterWhere(['like', 'ssid', $this->ssid])
            ->andFilterWhere(['like', 'pass', $this->pass])
            ->andFilterWhere(['like', 'dev_login', $this->dev_login])
            ->andFilterWhere(['like', 'dev_pass', $this->dev_pass])
            ->andFilterWhere(['like', 'reboot_url', $this->reboot_url])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'show', $this->show]);

        return $dataProvider;
    }
}
