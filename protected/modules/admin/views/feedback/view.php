<?php
$this->breadcrumbs=array(
	Yii::t('model', 'Feedbacks')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('admin', 'Update {model}', array('{model}'=>Yii::t('model', 'Feedback'))),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('admin', 'Delete {model}', array('{model}'=>Yii::t('model', 'Feedback'))),'url'=>'#','htmlOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin', 'Are you sure you want to delete this item?'))),
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
