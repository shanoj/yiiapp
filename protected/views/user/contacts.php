<?php
/*
 *
 * $Id$
 --------------------------------------------------------------------------------------------------------------------------
 * Information contained in this file is the intellectual property of MarryDoor Plc
 * Copyright � 2012 MarryDorr. All Rights Reserved.
 * ---------------------------------------------------------------------------------------------------------------------------
 *
 * @author  Ageesh K Gopinath
 * @title contacts.php
 * @description <Description of this class>
 *  @filesource <URL>
 *  @version <Revision>
 */
?>

<section class="data-contnr"> <article class="section">
<form id="userContact" enctype="multipart/form-data" name="userContact" method="post" action="/user/contact">
<h1 class="message">Your life partner is just a click away!</h1>
<h5>
	<span class="sup">*</span>marked fields are mandatory
</h5>
</article> <article class="section">
<ul>
	<li>
		<div class="title">Regional Site</div>
		<div class="info">
			<select class="wid150">
				<option>Kerala</option>
			</select>
		</div>
	</li>
</ul>
<ul>
	<li><h3>Personal Details</h3></li>
	<li>
		<div class="title">
			Profile being created for <span class="sup">*</span>
		</div>
		<div class="info">
			<div class="radio wid90">
				<input type="radio" name="profileFor" value="0"> <span>Myself</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="profileFor" class="validate[required]"
					value="1"> <span>Son</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="profileFor" value="2"
					class="validate[required]"> <span>Brother</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="profileFor" value="3"
					class="validate[required]"><span>Relative</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="profileFor" value="4"
					class="validate[required]"><span>Friend</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">
			Marital status <span class="sup">*</span>
		</div>
		<div class="info">
			<div class="radio wid90">
				<input type="radio" name="marital" value="0"
					class="validate[required]"><span>Unmarried</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="marital" value="1"
					class="validate[required]"><span>Widower</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="marital" value="2"
					class="validate[required]"> <span>Divorced</span>
			</div>
			<div class="radio wid150">
				<input type="radio" name="marital" value="3"
					class="validate[required]"> <span>Awaiting divorce</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">
			Caste <span class="sup">*</span>
		</div>
		<div class="info">
		<?php
		$userPersonal = $user->userpersonaldetails;
		$religion = Religion::model()->findbyPk($user->userpersonaldetails->religionId);
		$caste = Caste::model()->findbyPk($user->userpersonaldetails->casteId);
		?>
			<div class="special width90">
			<?php if(isset($user->userpersonaldetails->religion))echo $user->userpersonaldetails->religion->name; else echo $religion->name ;?>
				-
				<?php if(isset($model->userpersonaldetails->caste))echo $model->userpersonaldetails->caste->name;else echo $caste->name ?>
				<a href="#"> edit</a>
			</div>
			<div class="special">Are you willing to marry from other communities</div>
			<div class="radio wid60">
				<input type="radio" class="validate[required]" name="interCaste"
					value="1"><span>Yes</span>
			</div>
			<div class="radio wid60">
				<input type="radio" class="validate[required]" name="interCaste"
					value="0"> <span>No</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">
			Country living in <span class="sup">*</span>
		</div> <?php
		$country = Country::model()->findbyPk($user->userpersonaldetails->countryId);
		?>
		<div class="info">
		<?php if(isset($user->userpersonaldetails->country))echo $user->userpersonaldetails->country->name;else  echo $country->name?>
			<a href="#"> edit</a>
		</div>
	</li>
	<li>
		<div class="title">
			Residing state <span class="sup">*</span>
		</div>
		<div class="info">

		<?php

		$records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',$user->userpersonaldetails->stateId,$list,array('empty' => 'State','class'=>'validate[required] wid150')); ?>
		</div>
	</li>
	<li>
		<div class="title">
			Residing district <span class="sup">*</span>
		</div>
		<div class="info">
					<?php
			$records = Districts::model()->findAll("active = 1");
			$list = CHtml::listData($records, 'districtId', 'name');
			echo CHtml::dropDownList('district',null,$list,array('empty' => 'District','class'=>'validate[required] wid150')); ?>
		
		</div>
	</li>
	<li>
		<div class="title">
			Residing Municipality <br />Corperation/ Panchayath
		</div>
		<div class="info">
					<?php

			$records = Places::model()->findAll("active = 1");
			$list = CHtml::listData($records, 'placeId', 'name');
			echo CHtml::dropDownList('place',null,$list,array('empty' => 'Places','class'=>'validate[required] wid150')); ?>
		</div>
	</li>
</ul>
<ul>
	<li><h3>Personal Contact Details</h3></li>
	<li>
		<div class="title">
			Communication Address <span class="sup">*</span>
		</div>
		<div class="info">
			<div class="inner-row">
			<input type="text" name="house" id="house" class="validate[required]"
						placeholder="House Name / No." />
			</div>
			<div class="inner-row">
			<input type="text" name="houseplace" id="place" class="validate[required]"
						placeholder="Place" />
			</div>
			<div class="inner-row">
			<input type="text" name="housecity" id="city" class="validate[required]"
						placeholder="City" />
				<input type="text" name="housedistrict" id="district" class="validate[required]"
						placeholder="District" />
			</div>
			<div class="inner-row">
				<input type="text" name="housestate" id="state" class="validate[required]"
						placeholder="State" />
				<input type="text" name="housecountry" id="country" class="validate[required]"
						placeholder="Country" />
			</div>
			<div class="inner-row">
				<input type="text" name="postcode" id="postcode" class="validate[required,custom[integer],maxSize[6]]"
						placeholder="Post Code" />
			</div>
		</div>
	</li>
	<li>
		<div class="title">Permanent Address</div>
		<div class="info">
			<div class="inner-row">
			<input type="text" name="house1" id="house" class="validate[required]"
						placeholder="House Name / No." />
			</div>
			<div class="inner-row">
			<input type="text" name="houseplace1" id="place" class="validate[required]"
						placeholder="Place" />
			</div>
			<div class="inner-row">
			<input type="text" name="housecity1" id="city" class="validate[required]"
						placeholder="City" />
				<input type="text" name="housedistrict1" id="district" class="validate[required]"
						placeholder="District" />
			</div>
			<div class="inner-row">
				<input type="text" name="housestate1" id="state" class="validate[required]"
						placeholder="State" />
				<input type="text" name="housecountry1" id="country" class="validate[required]"
						placeholder="Country" />
			</div>
			<div class="inner-row">
				<input type="text" name="postcode1" id="postcode" class="validate[required,custom[integer],maxSize[6]]"
						placeholder="Post Code" />
			</div>
		</div>
	</li>
	<li>
		<div class="title">Mobile No.</div>
		<div class="info">
			<?php echo $userPersonal->mobilePhone; ?>  <a href="#">Edit</a>
		</div>
	</li>
	<li>
		<div class="title">Landline No.</div>
		<div class="info">
			<?php 
						echo $userPersonal->landPhone ?>  <a href="#">Edit</a>
		</div>
	</li>
	<li>
		<div class="title">Altranative Mobile No.</div>
		<div class="info">
<input type="text" name="alterMobile" id="alterMobile"
							class="validate[required,funcCall[validatePhone]]" /> 
		</div>
	</li>
	<li>
		<div class="title">Facebook URL</div>
		<div class="info">
			<input type="text"
							name="facebook" id="facebook" class="validate[required] addres_form" /> 
		</div>
	</li>
	<li>
		<div class="title">Skype</div>
		<div class="info">
			<input
							type="text" class="validate[required] addres_form" name="skype" id="skype" /> 
		</div>
	</li>
	<li>
		<div class="title">Google IM</div>
		<div class="info">
			<input
							type="text" class="validate[required] addres_form" name="google" id="google" /> 
		</div>
	</li>
	<li>
		<div class="title">Yahoo IM</div>
		<div class="info">
			<input
							type="text" class="validate[required] addres_form" name="yahoo" id="yahoo" />
		</div>
	</li>
	<li>
		<div class="title">Who can view above detals</div>
		<div class="info">
			<div class="check">
				<input type="radio" name="pcontact" class="validate[required] radio" value="subscribers"><span>Subscribers</span>
			</div>
			<div class="check">
				<input type="radio" name="pcontact" class="validate[required] radio" value="request"> <span>By Request</span>
			</div>
		</div>
	</li>
</ul>
<ul>
	<li><h3>Physical Attributes</h3></li>
	<li>
		<div class="title">
			Height in cm<span class="sup">*</span>
		</div>
		<div class="info">
		<input type="text" class="validate[required,custom[integer],min[100],max[250]] addres_form" name="height" id="height" />
		</div>
	</li>
	<li>
		<div class="title">
			Weight in kg<span class="sup">*</span>
		</div>
		<div class="info">
			<input type="text" class="validate[required,custom[integer],min[30],max[150]] addres_form" name="weight" id="weight" />
		</div>
	</li>
	<li>
		<div class="title">
			Body type <span class="sup">*</span>
		</div>
		<div class="info">
			<div class="radio wid90">
				<input type="radio" name="bodyType" class="validate[required] radio" value="0"> <span>Average</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="bodyType" class="validate[required] radio" value="1"> <span>Athletic </span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="bodyType" class="validate[required] radio" value="2"> <span>Slim</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="bodyType" class="validate[required] radio" value="3"><span>Heavy</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">
			Complexion <span class="sup">*</span>
		</div>
		<div class="info">
			<div class="radio wid90">
				<input type="radio" name="complexion" class="validate[required]" value="0"><span>Very Fair</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="complexion" class="validate[required]" value="1"> <span>Fair </span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="complexion" class="validate[required]" value="2"> <span>Wheatish </span>
			</div>
			<div class="radio wid130">
				<input type="radio" name="complexion" class="validate[required]" value="3"> <span>Wheatish brown</span>
			</div>
			<div class="radio wid90">
				<input type="radio" name="complexion" class="validate[required]" value="4"> <span>Dark</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">
			Physical status <span class="sup">*</span>
		</div>
		<div class="info">
			<div class="inner-row">
				<div class="radio wid90">
					<input type="radio" name="physical" value="0"><span>Normal</span>
				</div>
				<div class="radio">
					<input type="radio" name="physical" value="1"><span><a href="#">Physically
							challenged</a> </span>
				</div>
			</div>
			<div id="option_list" subject="Physically challenged options"
				class="inner-row" style="display: none">
				<div class="check">
					<input type="checkbox" /> <span>Option1</span>
				</div>
				<div class="check">
					<input type="checkbox" /> <span>Option2</span>
				</div>
				<div class="check">
					<input type="checkbox" /> <span>Option3</span>
				</div>
				<div class="check">
					<input type="checkbox" /> <span>Option4</span>
				</div>
				<div class="check">
					<input type="checkbox" /> <span>Option5</span>
				</div>	
				<div class="check">
					<input type="checkbox" /> <span>Option6</span>
				</div>
			</div>
		</div>
	</li>
</ul>
<ul>
	<li><h3>Education & Occupation</h3></li>
	<li>
		<div class="title">
			Education <span class="sup">*</span>
		</div>
		<div class="info">
		<?php

					$records = EducationMaster::model()->findAll("active = 1");
					$list = CHtml::listData($records, 'educationId', 'name');
					echo CHtml::dropDownList('education',null,$list,array('empty' => 'Education','class'=>'validate[required] wid150')); ?>
			
		</div>
	</li>
	<li>
		<div class="title">
			Occupation <span class="sup">*</span>
		</div>
		<div class="info">
		<?php

					$records = OccupationMaster::model()->findAll("active = 1");
					$list = CHtml::listData($records, 'occupationId', 'name');
					echo CHtml::dropDownList('occupation',null,$list,array('empty' => 'Occupation','class'=>'validate[required] wid150')); ?>
		</div>
	</li>
	<li>
		<div class="title">
			Employed in <span class="sup">*</span>
		</div>
		<div class="info">
			<div class="radio wid100">
				<input type="radio" name="employed" class="validate[required]"  value="0"/><span>Government </span>
			</div>
			<div class="radio mR14">
				<input type="radio" name="employed" class="validate[required]"  value="1"/> <span>Private </span>
			</div>
			<div class="radio mR14">
				<input type="radio" name="employed" class="validate[required]"  value="2"/> <span>Business</span>
			</div>
			<div class="radio mR14">
				<input type="radio" name="employed" class="validate[required]"  value="3"/> <span>Defence</span>
			</div>
			<div class="radio mR14">
				<input type="radio" name="employed" class="validate[required]"  value="4"/><span>Self Employed</span>
			</div>
			<div class="radio ">
				<input type="radio" name="employed" class="validate[required]"  value="5"/><span>NRI</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">Income</div>
		<div class="info">
			<div class="radio wid100">
				<input type="radio" name="ctc" class="validate[required]" value="12" /> <span>Monthly</span>
			</div>
			<div class="radio wid80">
				<input type="radio" name="ctc" class="validate[required]" value="1" /> <span>Annual </span>
			</div>
			<div class="useRs">
				<input class="wid100" type="text" id="income"
									name="income" placeholder="Use Rupees" /> <span
					class="perM">1,00,000 per month </span>
			</div>
		</div>
	</li>
</ul>
<ul>
	<li><h3>Habits</h3></li>
	<li>
		<div class="title">Food</div>
		<div class="info">
			<div class="radio wid100">
				<input type="radio" name="food" class="validate[required]" value="0" /> <span>Vegetarian </span>
			</div>
			<div class="radio wid130">
				<input type="radio" name="food" class="validate[required]" value="1" />  <span>Non-Vegetarian </span>
			</div>
			<div class="radio ">
				<input type="radio" name="food" class="validate[required]" value="2" /> <span>Eggetarian</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">Smoking</div>
		<div class="info">
			<div class="radio wid100">
				<input type="radio" name="smoke" value="0" class="validate[required]" /> <span>No </span>
			</div>
			<div class="radio wid130">
				<input type="radio" name="smoke" value="1" class="validate[required]" /> <span>Occasionally </span>
			</div>
			<div class="radio ">
				<input type="radio" name="smoke" value="2" class="validate[required]" /><span>Yes</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">Drinking</div>
		<div class="info">
			<div class="radio wid100">
				<input type="radio" name="drink" value="0" class="validate[required]" /> <span>No </span>
			</div>
			<div class="radio wid130">
				<input type="radio" name="drink" value="1" class="validate[required]" /> <span>Occasionally </span>
			</div>
			<div class="radio ">
				<input type="radio" name="drink" value="2" class="validate[required]" /> <span>Yes</span>
			</div>
		</div>
	</li>
</ul>
<ul>
	<li><h3>Family Profile</h3></li>
	<li>
		<div class="title">Family status</div>
		<div class="info">
			<div class="radio wid140">
				<input type="radio" name="status" value="0" class="validate[required]" /> <span>Lower middle class
				</span>
			</div>
			<div class="radio mR10">
				<input type="radio" name="status" value="1" class="validate[required]" /> <span>Middle class </span>
			</div>
			<div class="radio mR10">
				<input type="radio" name="status" value="2" class="validate[required]" /> <span> Upper middle
					class</span>
			</div>
			<div class="radio mR10">
				<input type="radio" name="status" value="3" class="validate[required]" /><span>Rich</span>
			</div>
			<div class="radio">
				<input type="radio" name="status" value="4" class="validate[required]" /> <span>Affluent </span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">Family type</div>
		<div class="info">
			<div class="radio wid140">
				<input type="radio" name="type" value="0" class="validate[required]" /><span>Joint </span>
			</div>
			<div class="radio ">
				<input type="radio" name="type" value="1" class="validate[required]" /><span>Nuclear </span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">Family values</div>
		<div class="info">
			<div class="radio wid140">
				<input type="radio" name="familyValues" value="0" class="validate[required]" /> <span>Orthodox </span>
			</div>
			<div class="radio wid100">
				<input type="radio" name="familyValues" value="1" class="validate[required]" />  <span>Traditional </span>
			</div>
			<div class="radio wid140">
				<input type="radio" name="familyValues" value="2" class="validate[required]" />  <span>Moderate </span>
			</div>
			<div class="radio ">
				<input type="radio" name="familyValues" value="3" class="validate[required]" />  <span>Liberal </span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">Brothers</div>
		<div class="info">
			<input type="text"  name="brothers" class="validate[required,custom[integer]]"
								id="brothers" />
			<div class="married">
				<input type="text" name="brothersMarry" class="validate[required,custom[integer]]"
								id="brothersMarry" />
			</div>
		</div>
	</li>
	<li>
		<div class="title">Sisters</div>
		<div class="info">
			<input type="text"  name="sisters" class="validate[required,custom[integer]]"
								id="sisters" />
			<div class="married">
				<input type="text" name="sistersMarry" class="validate[required,custom[integer]]"
								id="sistersMarry" />
			</div>
		</div>
	</li>
	<li class="upPhotoM">
		<div class="title"></div>
		<div class="info">
		  <?php echo CHtml::activeFileField($user, 'familyAlbum'); ?>
			<a href="#" class="upload">UPLOAD YOUR FAMILY PHOTOS</a>
		</div>
	</li>
	<li class="whoM">
		<div class="title">Who can view album</div>
		<div class="info">
			<div class="check">
				<input type="checkbox" name="all" /> <span>All</span>
			</div>
			<div class="check">
				<input type="checkbox" name="subscribers" /> <span>Subscribers</span>
			</div>
			<div class="check">
				<input type="checkbox" name="member" /> <span>Loged Members</span>
			</div>
			<div class="check">
				<input type="checkbox" name="request"/> <span>By Request</span>
			</div>
		</div>
	</li>
	<li>
		<div class="title">About My family</div>
		<div class="info">
			<textarea 	name="familyDesc" rows="2" cols="20" class="validate[required]"
				placeholder="Please give details about your family, background etc. Limit it to 100 words to get maximum results. Do not write your contact details here. If you do so, your ID will be rejected by our automated system."></textarea>
		</div>
	</li>
</ul>
<ul>
	<li>
		<h3>Discription*</h3>
	</li>
	<li>
		<div class="title"></div>
		<div class="info">
		<textarea name="familyDesc" rows="2" cols="20" class="validate[required] text-input tab_300b">

</textarea>
			<textarea rows="2" cols="20" name="myDesc" class="validate[required]"
				placeholder="Enter your personal details, qualification, profession, interests etc. Do not write your contact details here. If you do so, your ID will be rejected by our automated system."></textarea>
		</div>
	</li>
	<li>
		<div class="buttonContnr3">
			<a href="#" class="type2">Submit</a> <a href="#" class="type2">Reset</a>
		</div>
	</li>
</ul>
</form>
</article> 

</section>
<aside class="rightbar-contnr">
<div class="subscribe-box">
	<div class="sub-now">
		Subscribe Now!<br /> <span>Only for</span>
	</div>
	<div class="digit">
		<span class="WebRupee">Rs.</span>200
	</div>
	<div class="for">For 3 Months</div>
	<div class="divider"></div>
	<div class="benefit">Benefits of Subscribing</div>
	<p>
		Real time update about profile visitors <br /> Access key details of
		other users<br /> Contact candidates directly <br /> View horoscope of
		members <br /> Message candidates directly
	</p>
	<div class="divider"></div>
	<a class="subNow" href="subscribe-now.htm">Subscribe Now</a>
</div>
</aside>


<script type="text/javascript">
$(document).ready(function(){
    $("#userContact").validationEngine('attach');
  });


</script>
