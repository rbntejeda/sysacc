<?php

/**
 * This is the model class for table "indicador".
 *
 * The followings are the available columns in table 'indicador':
 * @property string $IND_CORREL
 * @property string $PLA_CORREL
 * @property string $IND_ANYO
 * @property string $IND_MES
 * @property string $IND_CTP
 * @property string $IND_HHMES
 * @property string $IND_DIASPERDIDOS
 * @property string $IND_DOTACION
 * @property string $IND_PRODUCCION
 *
 * The followings are the available model relations:
 * @property Planta $pLACORREL
 */
class Indicador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'indicador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PLA_CORREL, IND_ANYO, IND_MES, IND_CTP, IND_HHMES, IND_DIASPERDIDOS, IND_DOTACION, IND_PRODUCCION', 'required'),
			array('PLA_CORREL, IND_ANYO, IND_MES, IND_CTP, IND_HHMES, IND_DIASPERDIDOS, IND_DOTACION, IND_PRODUCCION', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('IND_CORREL, PLA_CORREL, IND_ANYO, IND_MES, IND_CTP, IND_HHMES, IND_DIASPERDIDOS, IND_DOTACION, IND_PRODUCCION', 'safe', 'on'=>'search'),
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
			'pLACORREL' => array(self::BELONGS_TO, 'Planta', 'PLA_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'IND_CORREL' => 'Indicador',
			'PLA_CORREL' => 'Planta',
			'IND_ANYO' => 'Año',
			'IND_MES' => 'Mes',
			'IND_CTP' => 'Accidente con tiempo perdido (CTP)',
			'IND_HHMES' => 'HH Mes',
			'IND_DIASPERDIDOS' => 'Dias Perdidos',
			'IND_DOTACION' => 'Dotación Mes',
			'IND_PRODUCCION' => 'Producción (m3/mes)',
			'PLA_NOMBRE' => 'Planta',
			'MES' => 'Mes',
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

		$criteria->compare('IND_CORREL',$this->IND_CORREL,true);
		$criteria->compare('PLA_CORREL',$this->PLA_CORREL,true);
		$criteria->compare('IND_ANYO',$this->IND_ANYO,true);
		$criteria->compare('IND_MES',$this->IND_MES,true);
		$criteria->compare('IND_CTP',$this->IND_CTP,true);
		$criteria->compare('IND_HHMES',$this->IND_HHMES,true);
		$criteria->compare('IND_DIASPERDIDOS',$this->IND_DIASPERDIDOS,true);
		$criteria->compare('IND_DOTACION',$this->IND_DOTACION,true);
		$criteria->compare('IND_PRODUCCION',$this->IND_PRODUCCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getPLA_NOMBRE()
	{
		return ($pla=Planta::model()->findByPk($this->PLA_CORREL))?$pla->PLA_NOMBRE:"Sin planta";
	}
	public function getMES()
	{
		$mes=array(
	        "1"=>"Enero",
	        "2"=>"Febrero",
	        "3"=>"Marzo",
	        "4"=>"Abril",
	        "5"=>"Mayo",
	        "6"=>"Junio",
	        "7"=>"Julio",
	        "8"=>"Agosto",
	        "9"=>"Septiembre",
	        "10"=>"Octubre",
	        "11"=>"Noviembre",
	        "12"=> "Diciembre"
	     );
        return $mes["$this->IND_MES"];
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Indicador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
