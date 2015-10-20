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
            [['user_id', 'lname', 'company', 'change_date'], 'required'],
            [['user_id'], 'integer'],
            [['company'], 'string'],
            //[['change_date'], 'safe'],
            ['change_date', 'checkDate'],
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

    public function checkDate($attribute, $params)
    {
        // a date next week
        $nextWeek = date('Y-m-d', (time()+3600*24*7));
        $selected = date($this->change_date);

        if ($selected > $nextWeek) {
            $this->addError($attribute, "The date can't be later than a week");
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblEqs()
    {
        return $this->hasMany(TblEq::className(), ['user_id' => 'user_id']);
    }
}
