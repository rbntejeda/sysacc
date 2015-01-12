<?php

/**
 * This is the model class for table "planta".
 *
 * The followings are the available columns in table 'planta':
 * @property string $PLA_CORREL
 * @property string $COM_CORREL
 * @property string $EMP_CORREL
 * @property string $PLA_RUT
 * @property string $PLA_NOMBRE
 * @property string $PLA_DIRECCION
 * @property string $PLA_TELEFONO
 * @property string $PLA_ESTADO
 *
 * The followings are the available model relations:
 * @property Accidente[] $accidentes
 * @property Indicador[] $indicadors
 * @property Empresa $eMPCORREL
 * @property Comuna $cOMCORREL
 */
class Planta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'planta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PLA_NOMBRE, PLA_ESTADO', 'required'),
			array('COM_CORREL, EMP_CORREL', 'length', 'max'=>10),
			array('PLA_RUT', 'length', 'max'=>12),
			array('PLA_NOMBRE', 'length', 'max'=>150),
			array('PLA_DIRECCION', 'length', 'max'=>200),
			array('PLA_TELEFONO', 'length', 'max'=>50),
			array('PLA_ESTADO', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PLA_CORREL, COM_CORREL, EMP_CORREL, PLA_RUT, PLA_NOMBRE, PLA_DIRECCION, PLA_TELEFONO, PLA_ESTADO', 'safe', 'on'=>'search'),
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
			'accidentes' => array(self::HAS_MANY, 'Accidente', 'PLA_CORREL'),
			'indicadors' => array(self::HAS_MANY, 'Indicador', 'PLA_CORREL'),
			'eMPCORREL' => array(self::BELONGS_TO, 'Empresa', 'EMP_CORREL'),
			'cOMCORREL' => array(self::BELONGS_TO, 'Comuna', 'COM_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PLA_CORREL' => 'Planta',
			'COM_CORREL' => 'Comuna',
			'EMP_CORREL' => 'Empresa',
			'PLA_RUT' => 'RUT',
			'PLA_NOMBRE' => 'Nombre',
			'PLA_DIRECCION' => 'Dirección',
			'PLA_TELEFONO' => 'Telefono',
			'PLA_ESTADO' => 'Estado',
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

		$criteria->compare('PLA_CORREL',$this->PLA_CORREL,true);
		$criteria->compare('COM_CORREL',$this->COM_CORREL,true);
		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
		$criteria->compare('PLA_RUT',$this->PLA_RUT,true);
		$criteria->compare('PLA_NOMBRE',$this->PLA_NOMBRE,true);
		$criteria->compare('PLA_DIRECCION',$this->PLA_DIRECCION,true);
		$criteria->compare('PLA_TELEFONO',$this->PLA_TELEFONO,true);
		$criteria->compare('PLA_ESTADO',$this->PLA_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Planta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
