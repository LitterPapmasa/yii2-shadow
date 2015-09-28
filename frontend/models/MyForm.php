<?php

namespace frontend\models;

use yii\base\Model;

class MyForm extends Model 
{
	
	public $eqipPass;
	public $user;
	public $linuxName;
	public $userBefore;
	public $companyName;	
	
	
	function rules() {
		return [
				[['eqipPass','user', 'companyName'], 'required'],				
		];
	}
}