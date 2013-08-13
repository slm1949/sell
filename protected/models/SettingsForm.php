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
    public $confirm_admin_password;
    public $products_password;
    public $footer;
    public $contact_us;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('site_name, site_description, admin_password, confirm_admin_password', 'required'),
            array('skype, msn, products_password, confirm_admin_password, footer, contact_us', 'safe'),
            array('confirm_admin_password', 'compare', 'allowEmpty'=>false, 'compareAttribute'=>'admin_password', 'message'=>'confirm admin password is not compare'),
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
