<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_equips".
 *
 * @property integer $eq_id
 * @property string $eq_type
 * @property string $eq_inv
 * @property string $eq_desc
 * @property string $eq_pass
 * @property string $eq_boot
 * @property integer $user_id
 * @property integer $last_user_id
 * @property string $status
 * @property string $eq_update
 *
 * @property TblUsers $user
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
            [['eq_id', 'eq_type', 'eq_inv', 'user_id'], 'required'],
            [['eq_id', 'user_id', 'last_user_id'], 'integer'],
            [['eq_type', 'status'], 'string'],
            [['eq_update'], 'safe'],
            [['eq_inv'], 'string', 'max' => 11],
            [['eq_desc'], 'string', 'max' => 500],
            [['eq_pass'], 'string', 'max' => 64],
            [['eq_boot'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'eq_id' => 'Eq ID',
            'eq_type' => 'Eq Type',
            'eq_inv' => 'Eq Inv',
            'eq_desc' => 'Eq Desc',
            'eq_pass' => 'Eq Pass',
            'eq_boot' => 'Eq Boot',
            'user_id' => 'User ID',
            'last_user_id' => 'Last User ID',
            'status' => 'Status',
            'eq_update' => 'Eq Update',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['user_id' => 'user_id']);
    }
}
