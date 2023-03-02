<?php Yii::app()->clientScript->registerCssFile('https://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css'); ?>
<?php Yii::app()->clientScript->registerScriptFile('https://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/admin/product.js?v=1"); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'product-form',
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

	<?php echo $form->textFieldRow($model,'image',array('class'=>'span5','maxlength'=>255,'readonly'=>'true')); ?>
	<div class="control-group ">
		<label class="control-label"></label>
		<div class="controls">
			<div id="image_upload"></div>
			<?php
			if($model->image && $model->imageExists){
				$this->widget('ext.SAImageDisplayer', array(
	                'image' => $model->image,
	                'group' => 'product',
	                'size' => 'thumb',
	            ));
			}
			?>
		</div>
	</div>

	<?php echo $form->dropDownListRow($model,'category_id', Category::model()->toOptions()); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'model',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->html5EditorRow($model,'description'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('admin', 'Create') : Yii::t('admin', 'Update'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
