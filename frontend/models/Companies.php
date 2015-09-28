<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_companies".
 *
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_short_name
 *
 * @property TblUsers $tblUsers
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_name'], 'required'],
            [['company_name'], 'string', 'max' => 255],
            [['company_short_name'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_short_name' => 'Company Short Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblUsers()
    {
        return $this->hasOne(TblUsers::className(), ['company_id' => 'company_id']);
    }
}
