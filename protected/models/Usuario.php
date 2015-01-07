<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $PER_CORREL
 * @property string $USU_PASSWORD
 * @property string $USU_ESTADO
 * @property string $USU_ROLE
 * @property string $USU_MODIFIED
 * @property string $USU_CREATE
 *
 * The followings are the available model relations:
 * @property Persona $pERCORREL
 */
class Usuario extends CActiveRecord
{
	
	public $password;

	public function tableName()
	{
		return 'usuario';
	}
	public function validatePassword($password)
	{
	return $this->hashPassword($password)===$this->password;
	}
 
	public function hashPassword($password)
	{
		return MD5($password);
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password,PER_CORREL, USU_PASSWORD, USU_ESTADO, USU_ROLE', 'required','message'=>'El campo {attribute} no puede estar vacio.'),
			array('PER_CORREL', 'length', 'max'=>10),
			array('USU_PASSWORD', 'length', 'max'=>200),
			array('USU_ESTADO', 'length', 'max'=>9),
			array('USU_ROLE', 'length', 'max'=>11),
			array('password', 'compare', 'compareAttribute'=>'USU_PASSWORD','on'=>'Create','message'=>'Las contraseñas no coinciden.'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_CORREL, USU_PASSWORD, USU_ESTADO, USU_ROLE, USU_MODIFIED, USU_CREATE, USU_TIPO', 'safe', 'on'=>'search'),
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
			'pERCORREL' => array(self::BELONGS_TO, 'Persona', 'PER_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_CORREL' => 'Rut',
			'USU_PASSWORD' => 'Contraseña',
			'USU_ESTADO' => 'Estado',
			'USU_ROLE' => 'Rol',
			'USU_MODIFIED' => 'Modificado',
			'USU_CREATE' => 'Creado',
			'password'=>'Repetir contraseña'
		);
	}

	public function permisosAcceso($str=null)
	{
		$str=explode(",", $str);
		foreach ($str as $key) 
			if ($key==Yii::app()->user->name) 
				return true;
		return false;
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
		$criteria->compare('USU_PASSWORD',$this->USU_PASSWORD,true);
		$criteria->compare('USU_ESTADO',$this->USU_ESTADO,true);
		$criteria->compare('USU_ROLE',$this->USU_ROLE,true);
		$criteria->compare('USU_MODIFIED',$this->USU_MODIFIED,true);
		$criteria->compare('USU_CREATE',$this->USU_CREATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getPER_RUT()
	{
		return ($per=Persona::model()->findByPk($this->PER_CORREL))?$per->PER_RUT:"";
	}

	public function getPER_CARGO()
	{
		return ($per=Persona::model()->findByPk($this->PER_CORREL))?$per->PER_RUT:"";
	}

	public function getPER_EMPRESA()
	{
		return ($per=Persona::model()->findByPk($this->PER_CORREL))?$per->PER_RUT:"";
	}

	public function getPER_NOMBRE()
	{
		return ($per=Persona::model()->findByPk($this->PER_CORREL))?$per->Nombrecompleto:"";
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
