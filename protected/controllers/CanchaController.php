<?php

class CanchaController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
    public function actionCancha()
    {
        $model=new Cancha;

        // uncomment the following code to enable ajax-based validation
        /*
        if(isset($_POST['ajax']) && $_POST['ajax']==='cancha-Cancha-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        */

        if(isset($_POST['Cancha']))
        {
            $model->attributes=$_POST['Cancha'];
            if($model->validate())
            {
                // form inputs are valid, do something here
                $canchas = new Cancha;
                $canchas->nombre  = $model->attributes['nombre'];
                $canchas->tarifaD = $model->attributes['tarifaD'];
                $canchas->tarifaN = $model->attributes['tarifaN'];
                $canchas->idLocal = $model->attributes['idLocal'];
                $canchas->save();
                return;
            }
        }
        $this->render('Cancha',array('model'=>$model));
    }
}