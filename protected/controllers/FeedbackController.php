<?php

class FeedbackController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout='/layouts/column2';

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionIndex()
    {
        $model=new Feedback;

        if(isset($_POST['Feedback']))
        {
            $model->attributes=$_POST['Feedback'];

            if($model->save())
            {
                Yii::app()->user->setFlash('success', 'Feedback successfully');
                $this->redirect(array('index'));
            }else{
                Yii::app()->user->setFlash('error', Yii::t('admin', 'Update failed'));
            }
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }
}
