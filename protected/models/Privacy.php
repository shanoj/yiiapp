<?php

/**
 * This is the model class for table "privacy".
 *
 * The followings are the available columns in table 'privacy':
 * @property string $id
 * @property string $items
 * @property string $privacy
 */
class Privacy extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Privacy the static model class
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
		return 'privacy';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('items', 'length', 'max'=>9),
			array('privacy', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, items, privacy', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'items' => 'Items',
			'privacy' => 'Privacy',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('items',$this->items,true);
		$criteria->compare('privacy',$this->privacy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}