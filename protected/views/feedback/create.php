<?php
$this->breadcrumbs=array(
    'Feedback'
);
?>

<h1>Feedback</h1>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
    'id'=>'feedback-form',
    'type'=>'horizontal',
    'enableClientValidation'=>true,
    'enableAjaxValidation'=>false,
    'clientOptions'=>array( 
        'validateOnSubmit'=>true,
    ), 
)); ?>

    <p class="help-block"><?php echo Yii::t('admin', 'Fields with <span class="required">*</span> are required.') ?>
</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->radioButtonListRow($model,'sex', array('Male', 'Female')); ?>

    <?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->textFieldRow($model,'tel',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->textFieldRow($model,'fax',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->textFieldRow($model,'address',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->textFieldRow($model,'title',array('class'=>'span5','maxlength'=>255)); ?>

    <?php echo $form->textAreaRow($model,'content',array('rows'=>10, 'cols'=>50, 'class'=>'span8')); ?>

    <div class="form-actions">
        <?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>$model->isNewRecord ? Yii::t('admin', 'Create') : Yii::t('admin', 'Update'),
        )); ?>
    </div>

<?php $this->endWidget(); ?>
