<?php
class ProductController extends Controller
{

    public function filters()
    {
        return array(
            array(
                'application.filters.ProductLoginFilter + category, view'
            )
        );
    }

    public function actionCategory($id)
    {
        $category = Category::model()->findByPk($id);
        if($category===null)
            throw new CHttpException(404,'The requested page does not exist.');

        $criteria = new CDbCriteria();
        $criteria->addCondition('category_id=:category_id');
        $criteria->params = array(
            'category_id'=>$category->id
        );
        $criteria->order = 'id DESC';

        $item_count = Product::model()->count($criteria);
        $pages = new CPagination($item_count);
        $pages->setPageSize(30);
        $pages->applyLimit($criteria);

        $this->render('category', array(
            'model'=> Product::model()->findAll($criteria),
            'item_count'=>$item_count,
            'page_size'=>20,
            'items_count'=>$item_count,
            'pages'=>$pages,
            'category'=>$category
        ));
    }

    public function actionView($id){
        $product = Product::model()->findByPk($id);
        if($product===null)
            throw new CHttpException(404,'The requested page does not exist.');

        $this->render('view', array(
            'product'=>$product
        ));
    }

    public function actionLogin()
    {
        $model=new ProductLoginForm;

        if(isset($_POST['ProductLoginForm']))
        {
            $model->attributes=$_POST['ProductLoginForm'];

            if($model->login())
            {
                $session = Yii::app()->session;
                $session['product_logined']=true;
                Yii::app()->user->setFlash('success', 'Login successfully');
                $this->redirect(array('category/index'));
            }else{
                Yii::app()->user->setFlash('error', 'Login failed');
            }
        }

        $this->render('login',array(
            'model'=>$model,
        ));
    }
}