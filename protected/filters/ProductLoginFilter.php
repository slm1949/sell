<?php
class ProductLoginFilter extends CFilter
{
    protected function preFilter($filterChain)
    {
        $session = Yii::app()->session;
        if(!isset($session['product_logined']))
        {
            $filterChain->controller->redirect(array('product/login'));
        }

        // logic being applied before the action is executed
        return true; // false if the action should not be executed
    }
 
    protected function postFilter($filterChain)
    {
    }
}