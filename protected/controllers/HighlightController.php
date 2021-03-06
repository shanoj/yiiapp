<?php

class HighlightController extends Controller
{
	 public function beforeAction()
        {
                $user = Yii::app()->session->get('user');
                if(!isset($user)) {
                        $this->redirect(Yii::app()->user->loginUrl);
                        return false;
                }       
                return true;
        }   
	
	public function actionIndex()
	{

		//get user from session
		$users = $user = Yii::app()->session->get('user');
		if($users->highlighted == 1	)
		{
			$this->render('index',array('isHighLighted'=>true));
		}
		else
		$this->render('index');
	}
	
	public function actionupdate()
	{
		
		$users = $user = Yii::app()->session->get('user');
		$isHighLighted = false;
		if($users->highlighted == 1	)
		{
			$isHighLighted = true;
		}
		else if(isset($_POST['coupon']))
		{
			//get user from session
			
			$coupon = Coupon::model()->findByAttributes(array('couponCode'=>$_POST['coupon']));
			$coupon->isUsed = 1;
			$coupon->save();
			$users->highlighted = 1 ;
			$users->save();
			$isHighLighted = true;
			$payment = new Payment();
			$paypment->userID = $users->userId;
			
		}
		$this->render('index',array('isHighLighted'=> $isHighLighted));
	}

}