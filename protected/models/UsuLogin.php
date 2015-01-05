<?php

/**
 * This is the model class for table "usulogin".
 *
 * The followings are the available columns in table 'usulogin':
 * @property string $PER_CORREL
 * @property string $username
 * @property string $password
 * @property string $USU_ROLE
 * @property string $PER_NOMBRE
 * @property string $EMP_CORREL
 */
class UsuLogin extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function validatePassword($password)
	{
	return $this->hashPassword($password)===$this->password;
	}
 
	public function hashPassword($password)
	{
		return MD5($password);
	}
	public function tableName()
	{
		return 'usulogin';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, USU_ROLE', 'required'),
			array('PER_CORREL, EMP_CORREL', 'length', 'max'=>10),
			array('username', 'length', 'max'=>12),
			array('password', 'length', 'max'=>200),
			array('USU_ROLE', 'length', 'max'=>11),
			array('PER_NOMBRE', 'length', 'max'=>152),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_CORREL, username, password, USU_ROLE, PER_NOMBRE, EMP_CORREL', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_CORREL' => 'Per Correl',
			'username' => 'Username',
			'password' => 'Password',
			'USU_ROLE' => 'Usu Role',
			'PER_NOMBRE' => 'Per Nombre',
			'EMP_CORREL' => 'Emp Correl',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('USU_ROLE',$this->USU_ROLE,true);
		$criteria->compare('PER_NOMBRE',$this->PER_NOMBRE,true);
		$criteria->compare('EMP_CORREL',$this->EMP_CORREL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UsuLogin the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
