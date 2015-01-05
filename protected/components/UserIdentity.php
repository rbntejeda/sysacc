<?php
class UserIdentity extends CUserIdentity 
{
    private $_id;
    public function authenticate()
    {
        $user=UsuLogin::model()->findByAttributes(array('username'=>$this->username));
        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->username;
            $this->username=$user->USU_ROLE;
            $this->setState('role', $user->USU_ROLE);
            $this->setState('nombre',$user->PER_NOMBRE);
            $this->setState('empresa',$user->EMP_CORREL);
            $this->setState('correl',$user->PER_CORREL);
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
    }
    
    public function getId()
    {
        return $this->_id;
    }
}