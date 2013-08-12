<?php
class ProductLoginForm extends CFormModel
{
    public $password;

    public function rules()
    {
        return array(
            array('password', 'required'),
        );
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login()
    {
        if($this->password==Yii::app()->settings->get('system', 'products_password'))
        {
            return true;
        }
        else{
            return false;
        }
    }
}
