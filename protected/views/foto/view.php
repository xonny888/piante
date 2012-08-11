<?php
$this->breadcrumbs=array(
	'Fotos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Foto', 'url'=>array('index')),
	array('label'=>'Create Foto', 'url'=>array('create')),
	array('label'=>'Update Foto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Foto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Foto', 'url'=>array('admin')),
);
?>

<h1>View Foto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'll_idPianta',
		't_didascalia',
		't_IdFoto',
		//'binaryFile',
		'fileName',
		'fileType',
		'fileSize',
		'fileWidth',
		'fileHeight',
		'pianta.t_nomeScientificoPianta',
		array(
			'name' => 'pianta',
			'type' => 'raw',
			'value' => CHtml::link(CHtml::encode($model->pianta->t_nomeScientificoPianta), array('pianta/view', 'id' => $model->pianta->id, true)),
		),
	),
)); ?>
<? /*
<? echo CHtml::link(CHtml::image(Yii::app()->controller->createUrl('foto/loadImage', array('id'=>$model->id)), 'alt', array('width'=>'30px', 'height'=>'30px')),
array('displaySavedImage','id'=>$model->id)); ?>

<? echo CHtml::image(Yii::app()->controller->createUrl('foto/loadImage', array('id'=>$model->id)), $model->pianta->t_nomeScientificoPianta); ?>
*/ ?>
<? echo CHtml::link(CHtml::image(Yii::app()->controller->createUrl('foto/loadImage', array('id'=>$model->id)), 'alt', array('width'=>'30px', 'height'=>'30px')),
array('viewSavedImage','id'=>$model->id)); ?>
