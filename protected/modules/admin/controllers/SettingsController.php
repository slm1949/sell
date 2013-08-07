<?php

class SettingsController extends Controller
{
    public function actionIndex()
    {
        $settings = Yii::app()->settings->get('system');
        $model=new SettingsForm;
        $model->attributes=$settings;

        if(isset($_POST['SettingsForm']))
        {
            $model->attributes=$_POST['SettingsForm'];
            if($model->validate())
            {
                $model->save();

                Yii::app()->user->setFlash('success', 'Update settings successfully');
            }
        }

        $this->render('index',array(
            'model'=>$model
        ));

    }
}