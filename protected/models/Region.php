<?php

/**
 * This is the model class for table "region".
 *
 * The followings are the available columns in table 'region':
 * @property string $REG_CORREL
 * @property string $REG_NOMBRE
 * @property string $REG_SIMBOLO
 *
 * The followings are the available model relations:
 * @property Comuna[] $comunas
 */
class Region extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REG_CORREL, REG_NOMBRE, REG_SIMBOLO', 'required'),
			array('REG_CORREL', 'length', 'max'=>10),
			array('REG_NOMBRE', 'length', 'max'=>45),
			array('REG_SIMBOLO', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('REG_CORREL, REG_NOMBRE, REG_SIMBOLO', 'safe', 'on'=>'search'),
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
			'comunas' => array(self::HAS_MANY, 'Comuna', 'REG_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'REG_CORREL' => 'Reg Correl',
			'REG_NOMBRE' => 'Region',
			'REG_SIMBOLO' => 'Simbolo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('REG_CORREL',$this->REG_CORREL,true);
		$criteria->compare('REG_NOMBRE',$this->REG_NOMBRE,true);
		$criteria->compare('REG_SIMBOLO',$this->REG_SIMBOLO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Region the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
