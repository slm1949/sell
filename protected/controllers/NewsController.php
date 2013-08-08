 <?php

class NewsController extends Controller
{
    public function actionIndex()
    {
        $model=News::model()->findAll();
        if($model===null){
            throw new CHttpException(404,'The requested page does not exist.');
        }
        else{
            foreach ($model as $value) {
                $news[] = $value->attributes;
            }
            $this->render('index',array(
                'news'=>$news,
            ));
        }   
    }

    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    public function loadModel($id)
    {
        $model=News::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
} 