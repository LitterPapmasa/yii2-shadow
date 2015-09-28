<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_equips".
 *
 * @property integer $eq_id
 * @property string $pass
 * @property string $eq_inv
 * @property string $eq_type
 * @property string $describe
 * @property string $change_date
 * @property string $eq_created
 * @property integer $user_id
 *
 * @property Users $user
 */
class Equips extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_equips';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eq_type'], 'required'],
            [['eq_type'], 'string'],
            [['eq_created'], 'safe'],
            [['user_id'], 'safe'],
            [['pass'], 'string', 'max' => 45],
            [['eq_inv'], 'string', 'max' => 10],
            [['describe'], 'string', 'max' => 255],
            [['user_id'], 'safe']            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eq_id' => 'Eq ID',
            'pass' => 'Pass',
            'eq_inv' => 'Eq Inv',
            'eq_type' => 'Eq Type',
            'describe' => 'Describe',
            'change_date' => 'Change Date',
            'eq_created' => 'Eq Created',
            'user_id' => 'User ID',   
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
    
    public function getCompany()
    {
    	return $this->hasOne(Companies::className(), ['company_id' => 'company_id']);
    }
}
