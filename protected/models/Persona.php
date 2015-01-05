<?php

/**
 * This is the model class for table "Persona".
 *
 * The followings are the available columns in table 'Persona':
 * @property string $PER_CORREL
 * @property string $CAR_CORREL
 * @property string $PER_RUT
 * @property string $PER_NOMBRE
 * @property string $PER_PATERNO
 * @property string $PER_MATERNO
 * @property string $PER_EMAIL
 * @property string $PER_TELEFONO
 * @property string $PER_DIRECCION
 *
 * The followings are the available model relations:
 * @property EmpresaHasPersona[] $empresaHasPersonas
 * @property Cargo $cARCORREL
 * @property Usuario $usuario
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_CORREL, PER_RUT, PER_NOMBRE, PER_PATERNO, PER_MATERNO', 'required'),
			array('PER_CORREL, CAR_CORREL', 'length', 'max'=>10),
			array('PER_RUT', 'length', 'max'=>12),
			array('PER_NOMBRE, PER_PATERNO, PER_MATERNO, PER_TELEFONO', 'length', 'max'=>50),
			array('PER_EMAIL', 'length', 'max'=>200),
			array('PER_DIRECCION', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_CORREL, CAR_CORREL, PER_RUT, PER_NOMBRE, PER_PATERNO, PER_MATERNO, PER_EMAIL, PER_TELEFONO, PER_DIRECCION', 'safe', 'on'=>'search'),
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
			'empresaHasPersonas' => array(self::HAS_MANY, 'EmpresaHasPersona', 'PER_CORREL'),
			'cARCORREL' => array(self::BELONGS_TO, 'Cargo', 'CAR_CORREL'),
			'usuario' => array(self::HAS_ONE, 'Usuario', 'PER_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_CORREL' => 'Per Correl',
			'CAR_CORREL' => 'Car Correl',
			'PER_RUT' => 'Per Rut',
			'PER_NOMBRE' => 'Per Nombre',
			'PER_PATERNO' => 'Per Paterno',
			'PER_MATERNO' => 'Per Materno',
			'PER_EMAIL' => 'Per Email',
			'PER_TELEFONO' => 'Per Telefono',
			'PER_DIRECCION' => 'Per Direccion',
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

		$criteria->compare('PER_CORREL',$this->PER_CORREL,true);
		$criteria->compare('CAR_CORREL',$this->CAR_CORREL,true);
		$criteria->compare('PER_RUT',$this->PER_RUT,true);
		$criteria->compare('PER_NOMBRE',$this->PER_NOMBRE,true);
		$criteria->compare('PER_PATERNO',$this->PER_PATERNO,true);
		$criteria->compare('PER_MATERNO',$this->PER_MATERNO,true);
		$criteria->compare('PER_EMAIL',$this->PER_EMAIL,true);
		$criteria->compare('PER_TELEFONO',$this->PER_TELEFONO,true);
		$criteria->compare('PER_DIRECCION',$this->PER_DIRECCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
