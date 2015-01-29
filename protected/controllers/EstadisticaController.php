<?php

class EstadisticaController extends Controller
{
//ajax
	public function actiongenerarSegEmp()
	{
		$this->renderPartial('include/tabla');
		$this->renderPartial('include/grafico');
	}
	public function actionSeg_emp()
	{
		$model=new Form;
		$this->render('seg_emp',array("model"=>$model));
	}

	public function actionAcc_anu_are_bosque()
	{
		$this->render('acc_anu_are_bosque');
	}

	public function actionAcc_men_emp()
	{
		$this->render('acc_men_emp');
	}


	public function actionSeg_emp_are()
	{
		$this->render('seg_emp_are');
	}

	public function actionSeg_emp_emp()
	{
		$this->render('seg_emp_emp');
	}

	public function actionSeg_plan_are()
	{
		$this->render('seg_plan_are');
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
}