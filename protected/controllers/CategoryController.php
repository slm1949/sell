<?php

class CategoryController extends Controller
{

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionIndex()
    {
        $categories = Category::model()->findAllByAttributes(array(
            'parent_id'=>null
        ));
        $this->render('index',array(
            'categories'=>$categories,
        ));
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($key)
    {
        $category = Category::model()->findByAttributes(array(
            'key'=>$key
        ));

        $this->render('view',array(
            'category'=>$category,
        ));
    }
}
