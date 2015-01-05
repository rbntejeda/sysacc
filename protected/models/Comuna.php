<?php

/**
 * This is the model class for table "comuna".
 *
 * The followings are the available columns in table 'comuna':
 * @property string $COM_CORREL
 * @property string $REG_CORREL
 * @property string $COM_NOMBRE
 *
 * The followings are the available model relations:
 * @property Region $rEGCORREL
 * @property Empresa[] $empresas
 * @property Planta[] $plantas
 */
class Comuna extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comuna';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('REG_CORREL', 'length', 'max'=>10),
			array('COM_NOMBRE', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COM_CORREL, REG_CORREL, COM_NOMBRE', 'safe', 'on'=>'search'),
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
			'rEGCORREL' => array(self::BELONGS_TO, 'Region', 'REG_CORREL'),
			'empresas' => array(self::HAS_MANY, 'Empresa', 'COM_CORREL'),
			'plantas' => array(self::HAS_MANY, 'Planta', 'COM_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COM_CORREL' => 'Com Correl',
			'REG_CORREL' => 'Reg Correl',
			'COM_NOMBRE' => 'Com Nombre',
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

		$criteria->compare('COM_CORREL',$this->COM_CORREL,true);
		$criteria->compare('REG_CORREL',$this->REG_CORREL,true);
		$criteria->compare('COM_NOMBRE',$this->COM_NOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comuna the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
