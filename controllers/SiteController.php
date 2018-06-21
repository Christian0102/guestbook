<?php

namespace app\controllers;
use app\models\Register;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
 	public function actionIndex()
	{
		return $this->render('index');
	}
	public function actionRegister()
	{
		$model = new Register();
		if(isset($_POST['Register']))
		{
			var_dump($_POST['Register']);
		}
		
	return $this->render('register',['model'=>$model]);
	}
}
