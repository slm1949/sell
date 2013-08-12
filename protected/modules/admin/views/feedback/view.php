<?php
$this->breadcrumbs=array(
	Yii::t('model', 'Feedbacks')=>array('index'),
	$model->name,
);

$this->menu=array(
);
?>

<h1><?php echo Yii::t('admin', 'View {model}', array('{model}'=>Yii::t('model', 'Feedback'))); ?>  #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'sex',
		'email',
		'tel',
		'fax',
		'address',
		'title',
		'content',
		'created_at'
	),
)); ?>
