<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_users".
 *
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property integer $company_id
 * @property string $create_date
 *
 * @property Equips $equips
 * @property Companies $company
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
            [['fname', 'lname', 'company_id', 'create_date'], 'required'],
            [['company_id'], 'integer'],
            [['create_date'], 'safe'],
            [['fname', 'lname'], 'string', 'max' => 255],
            [['company_id'], 'unique']
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
            'company_id' => 'Company ID',
            'create_date' => 'Create Date',
        ];
    }    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEquips()
    {
        return $this->hasOne(Equips::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Companies::className(), ['company_id' => 'company_id']);
    }
}
