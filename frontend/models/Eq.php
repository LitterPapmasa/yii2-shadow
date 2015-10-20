<?php

namespace frontend\models;

use Yii;
//use frontend\models\

/**
 * This is the model class for table "tbl_eq".
 *
 * @property integer $eq_id
 * @property string $bs_pass
 * @property string $eq_type
 * @property string $eq_desc
 * @property string $eq_inv
 * @property integer $user_id
 *
 * @property TblUser $user
 */
class Eq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_eq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['eq_type', 'eq_inv', 'user_id'], 'required'],
            [['eq_type', 'eq_desc', 'eq_inv'], 'string'],
            [['user_id'], 'integer'],
            [['bs_pass'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eq_id' => 'Eq ID',
            'bs_pass' => 'Bs Pass',
            'eq_type' => 'Eq Type',
            'eq_desc' => 'Eq Desc',
            'eq_inv' => 'Eq Inv',
            'user_id' => 'Last Name',
            'user_fname' => 'Name',
//             'user_lname' => 'Last Name',
            'user_company' => 'Company',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Userlite::className(), ['user_id' => 'user_id']);
    }
}
