<?php
$this->breadcrumbs=array(
	Yii::t('model', 'News')=>array('index'),
	$model->title,
);
?>
<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'title',
		'content',
	),
)); ?>
