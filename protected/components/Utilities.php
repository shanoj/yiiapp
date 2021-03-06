<?php
/**
* Utility class
*/
class Utilities
{

   const DS = DIRECTORY_SEPARATOR;
   const PS = PATH_SEPARATOR;
   
   public static function getRegDays() {
     $days = array();
     foreach( range(1,31) as $day){
      if($day < 10) {
       $days['0'.$day] = '0'.$day;
      } else {
       $days[$day] = $day;
      }
     }
     return $days;
    }
    
 public static function getRegMonths()
 {
  return array(
     '01' => Yii::t('app','January'), 
     '02' => Yii::t('app','February'),
     '03' => Yii::t('app','March'), 
     '04' => Yii::t('app', 'April'),
     '05' => Yii::t('app','May'),
     '06' => Yii::t('app','June'),
     '07' => Yii::t('app','July'),
     '08' => Yii::t('app','August'), 
     '09' => Yii::t('app','September'), 
     '10' => Yii::t('app','October'), 
     '11' => Yii::t('app','November'),
     '12' => Yii::t('app','December'),
  );
 }
 
 
 public static function getRegYears()
 {

  $yearNow = self::currentYear();
  $yearFrom = $yearNow - 59;
  $yearTo = $yearNow - 18;
  $arrYears = array();

  foreach (range($yearFrom, $yearTo) as $number) {
   $arrYears[$number] = $number;
  }
  return $arrYears;
 }
 
 public static function getTime()
 {
  return array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12');
 }
 
 public static function getHeights()
 {
  $height = array();
  foreach( range(150,200) as $cm){
   $feet = $cm*0.3937008/12;
      $ft = (int)$feet;
      $inc = ceil(($feet-$ft)*12);
   $height[strval($cm)] = strval($cm.'cm - '.$ft.'ft '.$inc.'in');
     }
  return $height; 
 }
 
 public static function getAge()
 {
  $days = array();
     foreach( range(18,50) as $day){
   $days[$day] = $day;
     }
     return $days; 
 }
 
 public static function getAnnualSalary()
 {
  $salary = array();
     foreach( range(18,50) as $day){
   $days[$day] = $day;
     }
     return $days;
 }
 
 public static function getMeridiem()
 {
  return array('am' => 'AM','pm' =>'PM');
 }
 
 public static function getBodyType()
 {
 	return array('0'=>'Average','1'=>'Athletic','2'=>'Slim','3'=>'Heavy');
 }
	public static function getBodyColor()
 {
 	return array('0'=>'Very Fair','1'=>'Fair','2'=>'Wheatish','3'=>'Wheatish Brown','4'=>'Dark');
 }
 public static function getMaritalStatus()
 {
 	return array('0'=>'Unmarried','1'=>'widower','2'=>'Divorced','3'=>'Awating divorce');
 }
 
 public static function getProfileCreated()
 {
 	
 }
 public static function getInterCaste()
 {
 	
 }
 
 public static function getFamilyStatus()
 {
 	return array('0'=>'lower middle class','1'=>'middle class','2'=>'upper middle class','3'=>'rich','4'=>'affluent');
 } 
 
 public static function getFamilyType()
 {
 	return  array('0'=>'joint','1'=>'nuclear');
 }
 
 public static function getFamilyValues()
 {
 	return array('0'=>'orthodox','1'=>'traditional','2'=>'moderate','3'=>'liberal');
 }
 

 public static function getValueForIds($model,$ids,$param)
 {
 	$valuString = "";
 	$arrayIds = explode(",", $ids);
   	$result = $model->findAllByAttributes(array($param=>$arrayIds));
   	if(sizeof($result) > 0)
   	{
   	foreach ($result as $value) {
   		$valuString = $valuString.','. $value->name;
   	}
 	return $valuString;
   	}
   	else
   	return 'Not specified';
 }
 
 
 
 public static function getArrayValues($arrayToFetch,$indexes)
 {
 	$stringValue = "";
 	$arrayIds = explode(",", $indexes);
 	if(sizeof($arrayIds)> 0)
 	{
 	foreach ($arrayIds as $value) {
		$stringValue = $stringValue.','.$arrayToFetch[$value];
 	}
	return $stringValue; 	
 	}
 	else 
 	return "Not specified";
 }
 
 
 public static function getJob()
 {
 	return array('0'=>'Goverment','1'=>'private','2'=>'Business','3'=>'Defence','4'=>'self','5'=>'NRI');
 }
 
 public static function physicalStatus()
 {
 	return array('0'=>'Normal','1'=> 'physically challenged');
 }
 
 public static function getFood()
 {
 	return array('0'=>'Vegetarian','1'=>'Non-Vegetarian','2'=>'Eggetarian');
 }
 
 public static function getDrink()
 {
 	return array('0'=>'Non-Drinker','1'=> 'Occasinoaly','2'=>'Drinker');
 }
 
	public static function getSmoke()
	{
		return array('0'=>'Non-smoker','1'=> 'Occasinoaly','2'=>'Smoker');
	} 

 public static function getYears()
 {
  $yearNow = self::currentYear();
  $yearFrom = $yearNow - 10;
  $yearTo = $yearNow + 10;
  $arrYears = array(''=>'Year');

  foreach (range($yearFrom, $yearTo) as $number) {
   $arrYears[$number] = $number;
  }
  return $arrYears;
 }

 public static function getAgeFromDateofBirth($dob)
 {
    return floor((time() - strtotime($dob)) / 31556926);
 }
 
 public static function getHumanTime($time)
 {
 	
    $time = time() - $time; // to get the time since that moment
    $tokens = array (
        31536000 => 'year',
        2592000 => 'month',
        604800 => 'week',
        86400 => 'day',
        3600 => 'hour',
        60 => 'minute',
        1 => 'second'
    );

    foreach ($tokens as $unit => $text) {
        if ($time < $unit) continue;
        $numberOfUnits = floor($time / $unit);
        return $numberOfUnits.' '.$text.(($numberOfUnits>1)?'s':'');
    }

 }
 
 /**
  * Get the current year
  */
  
 public static function currentYear()
 {
  return date("Y");
 } 
 
 /**
  * Get the current Day
  */
  
 public static function currentDay()
 {
  return date("d");
 }
 
 /**
  * Get the current Day
  */
  
 public static function currentMonth()
 {
  return date("m");
 }
   public static function getFtpPath(){
   	return Yii::app()->params['ftpPath'];
   }
   
	public static function getDirectory($path,$subdirectory=array()){

		$createPath = self::getFtpPath().self::DS.$path;	
		if(!is_dir($createPath)){
				mkdir($createPath, 0777);
				chmod($createPath, 0777);
			}
		$returnPath = $createPath;
		if(!empty($subdirectory)){
			foreach($subdirectory as $dir){
				$createPath = $returnPath.self::DS.$dir;
				if(!is_dir($createPath)){
					mkdir($createPath, 0777);
					chmod($createPath, 0777);
				}
				$returnPath = $createPath;
			}
		}
		return $returnPath;
   }
	
   public static function getExtension($file) {  
		$position = strrpos($file,".");  
		if (!$position) { return ""; } 
		$length = strlen($file) - $position;  
		$extension = substr($file,$position+1,$length);  
		return $extension;  
	} 
	
	public static function getFullFilePath($path,$fileName){
		return $path.self::DS.$fileName;
	}
	
	public static function isValidImageExtension($extension){
		if(in_array($extension,array('jpg','jpeg','gif','png'))){
			return true;
		}else{
			return false;
		}
	}
	
	public static function uploadFile($fileName,$path){
		if(move_uploaded_file($fileName, $path)) { 
				return true;
			} else{  
				 return false;  
			} 
	}
	
	public static function getProfileImage($marryId,$imageName){
		if($imageName != ''){
			return Yii::app()->params['mediaUrl']."/profile/".$marryId."/".$imageName;
		}else{
			return Yii::app()->params['mediaUrl']."/profile/noimage.jpg";
		}
	}
	
	public static function isValidDocumentExtension($extension){
		if(in_array($extension,array('txt','doc','docx','pdf','rft','jpg','jpeg','png'))){
			return true;
		}else{
			return false;
		}
	}
	
 public static function getInterestStatus()
 {
 	return array('0'=>'no','1'=>'accept','2'=>'decline','3'=>'delete');
 }
 
 public static function createAbsoluteUrl($controller,$action='',$params=array(),$protocol='')
 {
 	if($action == ''){
 		$action = 'index';
 	}
 	if($protocol == ''){
 		$protocol = 'http';
 	}
 	if($protocol == "https"){
    		$selfUrl = 'http://'.$_SERVER['SERVER_NAME']."/".$controller."/".$action;
    	}else{
    		$selfUrl = 'http://'.$_SERVER['SERVER_NAME']."/".$controller."/".$action;
    	}
    	if(!empty($params)){
    		$selfUrl.= "?";
    		foreach($params as $key=>$value){
    			$selfUrl.= $key."=".$value."&";
    		}
    		$selfUrl = substr($selfUrl,0,strlen($selfUrl)-1);
    	}
    	return $selfUrl;
 }
 
 public static function getProtocol(){
 	$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
 	return $protocol;
 }
 public static function getMediaUrl()
 {
 	if(self::getProtocol()=='https'){
 		return Yii::app()->params['sslmediaUrl'];
 	}else{
 		return Yii::app()->params['mediaUrl'];
 	}
 }
 
 public static function getUserTypes()
 {
 	return array('0'=>'normal','1'=>'paid','2'=>'deleted');
 }
 
	public static function getUserDisplay($index)
	 {
	 	$userType =  array('0'=>'You can change your account to subscribe user','1'=>'You are subscribed','2'=>'deleted');
	 	return $userType[$index]; 
	 }
 
 
 public static function getWeight()
 {
 	$weights = array();
     foreach( range(25,130) as $weight){
   $weights[$weight] = $weight;
     }
     return $weights; 	
 }
 
 public static function getHomeUrl()
 {
 	return Yii::app()->params['homeUrl']; 
 }
 
	public static function sendClaimEmail($claimParams) {
		$subject = "test";
        // escaped just in case...
        $datetime = new DateTime(); 
        $dString = $datetime->format('Y/m/d H:i:s');
        $body = htmlentities("UserName: {$claimParams['customerId']}\nEmail Address: {$claimParams['emailId']}\nPromotion Code: {$claimParams['claimcode']}\nDate:{$dString}",
                                ENT_QUOTES, 'UTF-8');
        set_time_limit(0);
        Yii::import('application.extensions.*');
        $message = new YiiMailMessage();
       	$message->setTo(array(Yii::app()->params['MailTo']=>'Promotions'));
        $message->setFrom(Yii::app()->params['MailFrom']);
        $message->setSubject($subject);
        $message->setBody($body);
        $numsent = Yii::app()->mail->send($message);
	}
 
	public static function getLanguageForId($id)
	{
		$language = Languages::model()->findbyPk($id);
		return $language->name;
	}
	
	public static function getAddressType()
	{
		return array('0' =>'communication','1' =>'permanent');
	}
 
 
 public static function getScriptUrl()
 {
 	if(self::getProtocol()=='https'){
 		return Yii::app()->params['sslScriptUrl'];
 	}else{
 		return Yii::app()->params['scriptUrl'];
 	}
 }
 
 public static function getPartnerPreference($parenterPrefObj)
 {
 	$condition = "age BETWEEN {$parenterPrefObj->ageFrom} AND {$parenterPrefObj->ageTo} and active =1";
 	if($parenterPrefObj->heightFrom){
	 	$condition .= " AND heightId BETWEEN {$parenterPrefObj->heightFrom} AND {$parenterPrefObj->heightTo}";
 	}
	if(isset($parenterPrefObj->maritalStatus))
	{
		$condition .= " AND maritalStatus = {$parenterPrefObj->maritalStatus}";
	}
	/*
 	if(isset($parenterPrefObj->haveChildren))
	{
		$condition .= "AND haveChildren = {$parenterPrefObj->haveChildren}";
	}*/
	if(isset($parenterPrefObj->physicalStatus))
	{
		$condition .= " AND physicalStatus = {$parenterPrefObj->physicalStatus}";
	}
 	
	if(isset($parenterPrefObj->religion))
	{
		$condition .= " AND religionId = {$parenterPrefObj->religion}";
	}
 	if(isset($parenterPrefObj->caste))
	{
		$condition .= " AND casteId = {$parenterPrefObj->caste}";
	}
 	/*if(isset($parenterPrefObj->subcaste))
	{
		$condition .= "AND casteId = {$parenterPrefObj->subcaste}";
	}
	*/
	
 	if(isset($parenterPrefObj->dosham))
	{
		$condition .= " AND dosham = {$parenterPrefObj->dosham}";
	
	}
 	if(isset($parenterPrefObj->sudham))
	{
		$condition .= " AND sudham = {$parenterPrefObj->sudham}";
	}
 	if(isset($parenterPrefObj->eatingHabits))
	{
		
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->eatingHabits}',food)";
	}
 	if(isset($parenterPrefObj->drinkingHabits))
	{
		
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->drinkingHabits}',drinking)";
	}
		if(isset($parenterPrefObj->smokingHabits))
	{
	
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->smokingHabits}',smoking)";
	}
 	if(isset($parenterPrefObj->languages))
	{
		
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->languages}',languages)";
	}
 if(isset($parenterPrefObj->countries))
	{
	
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->countries}',countryId)";
	}
 if(isset($parenterPrefObj->states))
	{
		
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->states}',stateId)";
	}
 if(isset($parenterPrefObj->districts))
	{
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->districts}',distictId)";
	}	
	if(isset($parenterPrefObj->places))
	{
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->places}',placeId)";
	}	
	/*
	if(isset($parenterPrefObj->citizenship))
	{
		$condition .= "AND citizenship = {$parenterPrefObj->citizenship}";
	}	
	*/
	if(isset($parenterPrefObj->occupation))
	{
		
		$condition .= " AND FIND_IN_SET('{$parenterPrefObj->occupation}',occupationId)";
	}	
	
	if(isset($parenterPrefObj->annualIncome))
	{
		$condition .= " AND annualIncome = {$parenterPrefObj->annualIncome}";
	}	
 	return $condition;
 }
 
	public static function getTimeDuration($time)
	{
			$strTimeSpent = "";
			$days = floor($time / (60 * 60 * 24));
			$remainder = $time % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
			
			if($days > 0)
			$strTimeSpent = date('F d Y', $time);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			$strTimeSpent = "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			$strTimeSpent = $minutes.' minutes ago';
			else
			$strTimeSpent = "few seconds ago";
			
			return $strTimeSpent;	
	}
}