<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'category-form',
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

	<?php echo $form->dropDownListRow($model,'parent_id',CHtml::listData(Category::model()->findAllByAttributes(array('parent_id'=>null)), 'id', 'name'), array('empty' => 'Select Parent')); ?>

	<?php echo $form->textAreaRow($model,'description',array('rows'=>5, 'class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('admin', 'Create') : Yii::t('admin', 'Update'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
