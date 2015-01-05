<?php

/**
 * This is the model class for table "area".
 *
 * The followings are the available columns in table 'area':
 * @property string $ARE_CORREL
 * @property string $ARE_NOMBRE
 * @property string $ARE_TIPO
 *
 * The followings are the available model relations:
 * @property Cargo[] $cargos
 * @property Empresa[] $empresas
 * @property EmpresaHasPersona[] $empresaHasPersonas
 */
class Area extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'area';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ARE_CORREL, ARE_NOMBRE', 'required'),
			array('ARE_CORREL, ARE_TIPO', 'length', 'max'=>10),
			array('ARE_NOMBRE', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ARE_CORREL, ARE_NOMBRE, ARE_TIPO', 'safe', 'on'=>'search'),
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
			'cargos' => array(self::HAS_MANY, 'Cargo', 'ARE_CORREL'),
			'empresas' => array(self::MANY_MANY, 'Empresa', 'empresa_has_area(ARE_CORREL, EMP_CORREL)'),
			'empresaHasPersonas' => array(self::HAS_MANY, 'EmpresaHasPersona', 'ARE_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARE_CORREL' => 'Are Correl',
			'ARE_NOMBRE' => 'Are Nombre',
			'ARE_TIPO' => 'Are Tipo',
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

		$criteria->compare('ARE_CORREL',$this->ARE_CORREL,true);
		$criteria->compare('ARE_NOMBRE',$this->ARE_NOMBRE,true);
		$criteria->compare('ARE_TIPO',$this->ARE_TIPO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Area the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
