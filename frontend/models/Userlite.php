<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_user".
 *
 * @property integer $user_id
 * @property string $fname
 * @property string $lname
 * @property string $company
 * @property string $change_date
 *
 * @property TblEq[] $tblEqs
 */
class Userlite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'lname', 'company'], 'required'],
            [['user_id'], 'integer'],
            [['company'], 'string'],
            [['change_date'], 'safe'],
            [['fname', 'lname'], 'string', 'max' => 64],
            [['user_id'], 'unique']
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
            'change_date' => 'Change Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblEqs()
    {
        return $this->hasMany(TblEq::className(), ['user_id' => 'user_id']);
    }
}
