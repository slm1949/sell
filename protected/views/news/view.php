<?php
$this->breadcrumbs=array(
	Yii::t('model', 'News')=>array('index'),
	$model->title,
);
?>

<h1><?php echo $model->title; ?></h1>

<div>
    <?php echo $model->content; ?>
</div>
