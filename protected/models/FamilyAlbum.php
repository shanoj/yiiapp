<?php

/**
 * This is the model class for table "familyAlbum".
 *
 * The followings are the available columns in table 'familyAlbum':
 * @property string $familyAlbumId
 * @property string $senderId
 * @property string $receiverId
 * @property integer $status
 * @property string $sendDate
 */
class FamilyAlbum extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FamilyAlbum the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'familyAlbum';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status', 'numerical', 'integerOnly'=>true),
			array('senderId, receiverId', 'length', 'max'=>20),
			array('sendDate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('familyAlbumId, senderId, receiverId, status, sendDate', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'familyAlbumId' => 'Family Album',
			'senderId' => 'Sender',
			'receiverId' => 'Receiver',
			'status' => 'Status',
			'sendDate' => 'Send Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('familyAlbumId',$this->familyAlbumId,true);
		$criteria->compare('senderId',$this->senderId,true);
		$criteria->compare('receiverId',$this->receiverId,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('sendDate',$this->sendDate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}