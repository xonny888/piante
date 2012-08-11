<?php
$this->breadcrumbs=array(
	'Proprieta Piantas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProprietaPianta', 'url'=>array('index')),
	array('label'=>'Create ProprietaPianta', 'url'=>array('create')),
	array('label'=>'Update ProprietaPianta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProprietaPianta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProprietaPianta', 'url'=>array('admin')),
);
?>

<h1>View ProprietaPianta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'version',
		'll_idPianta',
		'll_IdProprieta',
		't_note',
		't_valore',
	),
)); ?>
