<?php
$this->breadcrumbs=array(
	Yii::t('model', 'Feedbacks')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('admin', 'Update'),
);
?>

<h1><?php echo Yii::t('admin', 'Update {model}', array('{model}'=>Yii::t('model', 'Feedback'))); ?>  <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>