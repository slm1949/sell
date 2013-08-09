<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class SettingsForm extends CFormModel
{
    public $site_name;
    public $site_description;
    public $skype;
    public $msn;
    public $admin_password;
    public $products_password;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('site_name, site_description', 'required'),
            array('skype, msn, admin_password, products_password', 'safe'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
        );
    }

    public function save() {
        Yii::app()->settings->set('system', $this->attributes);

        return true;
    }
}
