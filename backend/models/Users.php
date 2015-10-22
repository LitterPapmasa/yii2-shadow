<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_users".
 *
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property string $company
 * @property string $user_status
 * @property string $date_create
 *
 * @property TblHistory[] $tblHistories
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'lname', 'company'], 'required'],
            [['user_id'], 'integer'],
            [['company', 'user_status'], 'string'],
            [['date_create'], 'safe'],
            [['fname', 'lname'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'company' => 'Company',
            'user_status' => 'User Status',
            'date_create' => 'Date Create',
        	'inventars' => 'Inventar N',
        	'pass' => 'Password'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblHistories()
    {
        return $this->hasMany(TblHistory::className(), ['user_id' => 'user_id']);
    }
    public function getEquips()
    {
    	return $this->hasOne(Equips::className(), ['user_id' => 'user_id']);
    }
    
    
}
