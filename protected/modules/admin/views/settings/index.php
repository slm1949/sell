<?php
$this->breadcrumbs=array(
    Yii::t('model', 'Categories')=>array('index'),
    Yii::t('admin', 'Create'),
);

?>

<h1>Settings</h1>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'settings-form',
    'type'=>'horizontal',
    'enableClientValidation'=>true,
    'enableAjaxValidation'=>false,
    'clientOptions'=>array( 
        'validateOnSubmit'=>true,
    ), 
)); ?>

    <p class="help-block"><?php echo Yii::t('admin', 'Fields with <span class="required">*</span> are required.') ?></p>

    <?php echo $form->textFieldRow($model,'site_name',array('class'=>'span5','maxlength'=>32)); ?>
    <?php echo $form->textFieldRow($model,'site_description',array('class'=>'span5','maxlength'=>255)); ?>
    <?php echo $form->textFieldRow($model,'skype',array('class'=>'span5','maxlength'=>32)); ?>
    <?php echo $form->textFieldRow($model,'msn',array('class'=>'span5','maxlength'=>32)); ?>
    <?php echo $form->textFieldRow($model,'admin_password',array('class'=>'span5','maxlength'=>32,'value'=>'')); ?>
    <?php echo $form->textFieldRow($model,'products_password',array('class'=>'span5','maxlength'=>32,'value'=>'')); ?>
    <?php echo $form->html5EditorRow($model,'footer'); ?>
    <?php echo $form->html5EditorRow($model,'contact_us'); ?>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Update',
        )); ?>
    </div>

<?php $this->endWidget(); ?>
