<?php
$this->breadcrumbs=array(
	Yii::t('model', 'Products')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('admin', 'Update {model}', array('{model}'=>Yii::t('model', 'Product'))),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('admin', 'Delete {model}', array('{model}'=>Yii::t('model', 'Product'))),'url'=>'#','htmlOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin', 'Are you sure you want to delete this item?'))),
);
?>

<h1><?php echo Yii::t('admin', 'View {model}', array('{model}'=>Yii::t('model', 'Product'))); ?>  #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'image',
			'value'=>$this->widget('ext.SAImageDisplayer', array(
                'image' => $model->image,
                'group' => 'product',
                'size' => 'big',
            ), true),
            'type'=>'raw'
		),
		'name',
		'model',
		'category_id',
        array(
            'name'=>'description',
            'type'=>'raw'
        )
	),
)); ?>
