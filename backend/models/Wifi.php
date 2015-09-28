<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_wifi".
 *
 * @property integer $dev_id
 * @property string $ssid
 * @property string $pass
 * @property string $dev_login
 * @property string $dev_pass
 * @property string $reboot_url
 * @property string $comment
 * @property string $date_create
 * @property string $show
 */
class Wifi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_wifi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ssid', 'pass', 'dev_login', 'dev_pass', 'reboot_url', 'show'], 'required'],
            [['date_create'], 'safe'],
            [['show'], 'string'],
            [['ssid', 'pass', 'dev_login', 'dev_pass'], 'string', 'max' => 100],
            [['reboot_url', 'comment'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dev_id' => 'Dev ID',
            'ssid' => 'Ssid',
            'pass' => 'Pass',
            'dev_login' => 'Dev Login',
            'dev_pass' => 'Dev Pass',
            'reboot_url' => 'Reboot Url',
            'comment' => 'Comment',
            'date_create' => 'Date Create',
            'show' => 'Show',
        ];
    }
}
