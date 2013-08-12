<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->settings['site_name']); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
    <?php Yii::app()->clientScript->registerScriptFile('/js/common.js'); ?>
    <?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl."/css/styles.css");?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'brand'=>$this->settings['site_name'],
    'collapse'=>true,
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'About Us', 'url'=>array('/doc/view', 'key'=>'about_us')),
                array('label'=>'Products', 'url'=>array('/category/index')),
                array('label'=>'Sales', 'url'=>array('/doc/view', 'key'=>'sales')),
                array('label'=>'News', 'url'=>array('/news/index')),
                array('label'=>'Feedback', 'url'=>array('/feedback/index')),
                array('label'=>'Contact Us', 'url'=>array('/doc/view', 'key'=>'contact_us')),
            ),
        )
    ),
)); ?>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

    <?php
        $this->widget('bootstrap.widgets.TbAlert', array(
            'block'=>true, // display a larger alert block?
            'fade'=>true, // use transitions?
            'closeText'=>'&times;', // close link text - if set to false, no close link is displayed
            'alerts'=>array( // configurations per alert type
                'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), 
                'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), 
            ),
        ));
    ?>

    <div class="row">
        <div class="span3">
            <div class="well">
                <?php $this->widget('Categories'); ?>
            </div>

            <div class="well">
                <h2>Contact Us</h2>
                <div>
                    <p>
                        <?php 
                        if($this->settings['msn']){
                            $image = CHtml::image('/images/msn.gif');
                            echo CHtml::link($image, 'msnim:chat?contact='.$this->settings['msn']);
                        }
                        if($this->settings['skype']){
                            $image = CHtml::image('/images/skype.gif');
                            echo CHtml::link($image, 'skype:'.$this->settings['skype'].'?call');
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="span9">
            <?php echo $content; ?>
        </div>
    </div>

	<div class="clear"></div>

	<div id="footer">
        <?php if($this->settings['footer']){ echo $this->settings['footer']; } ?>
        <br/>
		Copyright &copy; <?php echo date('Y'); ?> by <?php echo $this->settings['site_name'] ?>.<br/>
		All Rights Reserved.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
