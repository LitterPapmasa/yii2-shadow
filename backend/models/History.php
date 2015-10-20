<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_history".
 *
 * @property integer $hist_id
 * @property integer $user_id
 * @property integer $eq_id
 * @property string $comments
 *
 * @property TblUsers $user
 * @property TblEquips $eq
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'eq_id', 'comments'], 'required'],
            [['user_id', 'eq_id'], 'integer'],
            [['comments'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hist_id' => 'Hist ID',
            'user_id' => 'User ID',
            'eq_id' => 'Eq ID',
            'comments' => 'Comments',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(TblUsers::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEq()
    {
        return $this->hasOne(TblEquips::className(), ['eq_id' => 'eq_id']);
    }
}
