<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.$this->settings['site_name'],
)); ?>

<p><?php echo $this->settings['site_description']; ?></p>

<?php $this->endWidget(); ?>
