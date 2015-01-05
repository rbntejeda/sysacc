<?php

/**
 * This is the model class for table "cargo".
 *
 * The followings are the available columns in table 'cargo':
 * @property string $CAR_CORREL
 * @property string $ARE_CORREL
 * @property string $CAR_NOMBRE
 *
 * The followings are the available model relations:
 * @property Accidente[] $accidentes
 * @property Area $aRECORREL
 * @property EmpresaHasPersona[] $empresaHasPersonas
 * @property Persona[] $personas
 */
class Cargo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cargo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CAR_CORREL, ARE_CORREL, CAR_NOMBRE', 'required'),
			array('CAR_CORREL, ARE_CORREL', 'length', 'max'=>10),
			array('CAR_NOMBRE', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CAR_CORREL, ARE_CORREL, CAR_NOMBRE', 'safe', 'on'=>'search'),
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
			'accidentes' => array(self::HAS_MANY, 'Accidente', 'CAR_CORREL'),
			'aRECORREL' => array(self::BELONGS_TO, 'Area', 'ARE_CORREL'),
			'empresaHasPersonas' => array(self::HAS_MANY, 'EmpresaHasPersona', 'CAR_CORREL'),
			'personas' => array(self::HAS_MANY, 'Persona', 'CAR_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CAR_CORREL' => 'Car Correl',
			'ARE_CORREL' => 'Are Correl',
			'CAR_NOMBRE' => 'Car Nombre',
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

		$criteria->compare('CAR_CORREL',$this->CAR_CORREL,true);
		$criteria->compare('ARE_CORREL',$this->ARE_CORREL,true);
		$criteria->compare('CAR_NOMBRE',$this->CAR_NOMBRE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cargo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
