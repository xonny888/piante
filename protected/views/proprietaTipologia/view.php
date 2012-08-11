<?php
$this->breadcrumbs=array(
	'Proprieta Tipologias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProprietaTipologia', 'url'=>array('index')),
	array('label'=>'Create ProprietaTipologia', 'url'=>array('create')),
	array('label'=>'Update ProprietaTipologia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProprietaTipologia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProprietaTipologia', 'url'=>array('admin')),
);
?>

<h1>View ProprietaTipologia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'version',
		'll_IdProprieta',
		'll_IdTipologia',
	),
)); ?>
