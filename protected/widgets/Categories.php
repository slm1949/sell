<?php
class Categories extends CWidget
{
    public function init()
    {
    }
 
    public function run()
    {
        $categories = Category::model()->findAllByAttributes(array(
            'parent_id'=>null
        ));
        $this->render('categories',array(
            'categories'=>$categories,
        ));
    }
}