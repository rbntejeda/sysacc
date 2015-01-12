<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $PER_CORREL
 * @property string $CAR_CORREL
 * @property string $EMP_CORREL
 * @property string $PER_RUT
 * @property string $PER_NOMBRE
 * @property string $PER_PATERNO
 * @property string $PER_MATERNO
 * @property string $PER_EMAIL
 * @property string $PER_TELEFONO
 * @property string $PER_DIRECCION
 *
 * The followings are the available model relations:
 * @property Empresa $eMPCORREL
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
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_RUT, PER_NOMBRE, PER_PATERNO, PER_MATERNO, EMP_CORREL', 'required'),
			array('PER_EMAIL', 'email','message'=>"El email ingresado no es correcto."),
			array('PER_RUT', 'unique','message'=>'Este rut ya existe.'), 
			array('CAR_CORREL, EMP_CORREL', 'length', 'max'=>10),
			array('PER_RUT', 'length', 'max'=>12),
			array('PER_NOMBRE, PER_PATERNO, PER_MATERNO, PER_TELEFONO', 'length', 'max'=>50),
			array('PER_EMAIL', 'length', 'max'=>200),
			array('PER_DIRECCION', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_CORREL, CAR_CORREL, EMP_CORREL, PER_RUT, PER_NOMBRE, PER_PATERNO, PER_MATERNO, PER_EMAIL, PER_TELEFONO, PER_DIRECCION', 'safe', 'on'=>'search'),
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
			'eMPCORREL' => array(self::BELONGS_TO, 'Empresa', 'EMP_CORREL'),
			'usuario' => array(self::HAS_ONE, 'Usuario', 'PER_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_CORREL' => 'ID',
			'CAR_CORREL' => 'Cargo',
			'EMP_CORREL' => 'Empresa',
			'EMP_NOMBRE' =>'Empresa',
			'PER_RUT' => 'Rut',
			'PER_NOMBRE' => 'Nombres',
			'PER_PATERNO' => 'Apellido Paterno',
			'PER_MATERNO' => 'Apellido Materno',
			'PER_EMAIL' => 'Email',
			'PER_TELEFONO' => 'Telefono',
			'PER_DIRECCION' => 'Dirección',
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
		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);
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
	public function getNombrecompleto()
	{
		return $this->PER_NOMBRE.' '.$this->PER_PATERNO.' '.$this->PER_MATERNO;
	}

	public function getnombreRut()
	{
		return $this->PER_RUT.' '.$this->PER_NOMBRE.' '.$this->PER_PATERNO.' '.$this->PER_MATERNO;
	}

	public function getEMP_NOMBRE(){
		return ($per=Empresa::model()->findByPk($this->EMP_CORREL))?$per->EMP_NOMBRE:"";
	}

	public function getCAR_NOMBRE()
	{
		return ($per=Cargo::model()->findByPk($this->CAR_CORREL))?$per->CAR_NOMBRE:"SIN CARGO";
	}

	public function getUSUARIO()
	{
		return ($per=Usuario::model()->findByPk($this->PER_CORREL))?$per->USU_ROLE:"No tiene usuario";
	}
	public function getIFUSUARIO()
	{
		return (Usuario::model()->findByPk($this->PER_CORREL))?TRUE:FALSE;
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
