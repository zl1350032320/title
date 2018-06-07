<?php

namespace app\controllers;
use Yii;
use app\models\Min;
class MinController extends \yii\web\Controller
{
    public function actionList()
    {
    	$model = new Min();
    	if ($model->load(Yii::$app->request->post())) 
    	{
    		$model->save();
    		$this->redirect('index.php?r=min/list_do');
    	}
        return $this->render('list',['model'=>$model]);
    }

    public function actionList_do()
    {
    	$model = new Min();
    	$data = $model->find()->all();
    	// echo "<pre>";
    	// var_dump($data);die;
    	return $this->render('list_do',['data'=>$data]);
    }

}
