 <?php
/* @var $this NewsController */

$this->breadcrumbs=array(
    'News',
);
?>

<h1>News</h1>

<?php 
$this->widget('bootstrap.widgets.TbGridView',array(
    'id'=>'news-grid',
    'dataProvider'=>$news,
    'enableSorting'=>false,
    'columns'=>array(
        array(
            'header'=>'Title',
            'labelExpression'=>'$data->title',
            'urlExpression'=>'array("news/view", "id"=>$data->id)',
            'class'=>'zii.widgets.grid.CLinkColumn',
            'headerHtmlOptions'=>array(
                'class'=>'span8'
            )
        ),
        array(
            'name'=>'created_at',
            'header'=>''
        )
    ),
)); 
?>