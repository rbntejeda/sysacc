<?php

/**
 * This is the model class for table "empresa".
 *
 * The followings are the available columns in table 'empresa':
 * @property string $EMP_CORREL
 * @property string $COM_CORREL
 * @property string $EMP_RUT
 * @property string $EMP_NOMBRE
 * @property string $EMP_DIRECCION
 * @property string $EMP_TELEFONO
 * @property string $EMP_AREA
 *
 * The followings are the available model relations:
 * @property Comuna $cOMCORREL
 * @property Area[] $areas
 * @property Persona[] $personas
 * @property Planta[] $plantas
 */
class Empresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EMP_NOMBRE, EMP_AREA', 'required'),
			array('COM_CORREL', 'length', 'max'=>10),
			array('EMP_RUT', 'length', 'max'=>12),
			array('EMP_NOMBRE', 'length', 'max'=>150),
			array('EMP_DIRECCION', 'length', 'max'=>200),
			array('EMP_TELEFONO', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EMP_CORREL, COM_CORREL, EMP_RUT, EMP_NOMBRE, EMP_DIRECCION, EMP_TELEFONO, EMP_AREA', 'safe', 'on'=>'search'),
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
			'cOMCORREL' => array(self::BELONGS_TO, 'Comuna', 'COM_CORREL'),
			'areas' => array(self::MANY_MANY, 'Area', 'empresa_has_area(EMP_CORREL, ARE_CORREL)'),
			'personas' => array(self::HAS_MANY, 'Persona', 'EMP_CORREL'),
			'plantas' => array(self::HAS_MANY, 'Planta', 'EMP_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EMP_CORREL' => 'Empresa',
			'COM_NOMBRE' => 'Comuna',
			'COM_CORREL' => 'Comuna',
			'EMP_RUT' => 'RUT',
			'EMP_NOMBRE' => 'Nombre',
			'EMP_DIRECCION' => 'Dirección',
			'EMP_TELEFONO' => 'Telefono',
			'EMP_AREA' => 'Area',
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

		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
		$criteria->compare('COM_CORREL',$this->COM_CORREL,true);
		$criteria->compare('EMP_RUT',$this->EMP_RUT,true);
		$criteria->compare('EMP_NOMBRE',$this->EMP_NOMBRE,true);
		$criteria->compare('EMP_DIRECCION',$this->EMP_DIRECCION,true);
		$criteria->compare('EMP_TELEFONO',$this->EMP_TELEFONO,true);
		$criteria->compare('EMP_AREA',$this->EMP_AREA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getCOM_NOMBRE()
	{
		return ($com=Comuna::model()->findByPk($this->COM_CORREL))?$com->COM_NOMBRE:"Sin Asignar";
	}
		public function getIFPLANTA()
	{
		return (Planta::model()->findByAttributes(array('EMP_CORREL'=>$this->EMP_CORREL)))?TRUE:FAlSE;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
