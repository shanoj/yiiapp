<?php

class SearchController extends Controller
{
	public function actionSearch()
	{
		$this->render('search');
	}
	
	public function actionRegular()
	{
		$this->render('regular');
	}
	
	public function actionQuick(){
		$this->render('regular');
	}
	
	public function actionAdvance(){
		$this->render('advance');
	}
	public function actionByid(){
		$this->render('byid');
	}
	public function actionKeyword()
	{
		$this->render('keyword');
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