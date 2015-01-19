<?php
/**
 * This is the model class for table "accidente".
 *
 * The followings are the available columns in table 'accidente':
 * @property string $ACC_CORREL
 * @property string $PLA_CORREL
 * @property string $CAR_CORREL
 * @property string $ACC_DESCRIPCION
 * @property string $ACC_SITIO
 * @property string $ACC_FECHA
 * @property string $ACC_PARAFECT
 * @property string $ACC_RUT
 * @property string $ACC_TIPO
 * @property string $ACC_AGENTE
 * @property string $ACC_ACCION
 * @property string $ACC_CONSEC
 *
 * The followings are the available model relations:
 * @property Cargo $cARCORREL
 * @property Planta $pLACORREL
 */
class Accidente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'accidente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('ACC_COND,ACC_CONSEC,ACC_INCIDENTE,ACC_HORA,PLA_CORREL,CAR_CORREL, ACC_FECHA, ACC_PARAFECT, ACC_TIPO, ACC_AGENTE, ACC_ACCION, ACC_CONSEC', 'required'),
			array('PLA_CORREL, CAR_CORREL', 'length', 'max'=>10),
			array('ACC_RUT', 'length', 'max'=>12),
			array('ACC_SITIO', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ACC_CORREL, PLA_CORREL, CAR_CORREL, ACC_DESCRIPCION, ACC_SITIO, ACC_FECHA, ACC_PARAFECT, ACC_RUT, ACC_TIPO, ACC_AGENTE, ACC_ACCION, ACC_CONSEC', 'safe', 'on'=>'search'),
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
			'cARCORREL' => array(self::BELONGS_TO, 'Cargo', 'CAR_CORREL'),
			'pLACORREL' => array(self::BELONGS_TO, 'Planta', 'PLA_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ACC_COND'=>'Condición',
			'ACC_INCIDENTE'=>'Incidente',
			'ACC_HORA'=>'Hora',
			'ACC_CORREL' => 'Accidente',
			'PLA_CORREL' => 'Planta',
			'CAR_CORREL' => 'Cargo',
			'ACC_DESCRIPCION' => 'Descripción',
			'ACC_SITIO' => 'Sitio preciso del accidente',
			'ACC_FECHA' => 'Fecha',
			'ACC_PARAFECT' => 'Parte Afectada',
			'ACC_RUT' => 'Rut',
			'ACC_TIPO' => 'Tipo Accidente',
			'ACC_AGENTE' => 'Agente Accidente',
			'ACC_ACCION' => 'Acciones',
			'ACC_CONSEC' => 'Consecuencia',
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

		$criteria->compare('ACC_CORREL',$this->ACC_CORREL,true);
		$criteria->compare('PLA_CORREL',$this->PLA_CORREL,true);
		$criteria->compare('CAR_CORREL',$this->CAR_CORREL,true);
		$criteria->compare('ACC_DESCRIPCION',$this->ACC_DESCRIPCION,true);
		$criteria->compare('ACC_SITIO',$this->ACC_SITIO,true);
		$criteria->compare('ACC_FECHA',$this->ACC_FECHA,true);
		$criteria->compare('ACC_PARAFECT',$this->ACC_PARAFECT,true);
		$criteria->compare('ACC_RUT',$this->ACC_RUT,true);
		$criteria->compare('ACC_TIPO',$this->ACC_TIPO,true);
		$criteria->compare('ACC_AGENTE',$this->ACC_AGENTE,true);
		$criteria->compare('ACC_ACCION',$this->ACC_ACCION,true);
		$criteria->compare('ACC_CONSEC',$this->ACC_CONSEC,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Accidente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
