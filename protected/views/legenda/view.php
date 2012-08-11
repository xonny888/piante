<?php
$this->breadcrumbs=array(
	'Legendas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Legenda', 'url'=>array('index')),
	array('label'=>'Create Legenda', 'url'=>array('create')),
	array('label'=>'Update Legenda', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Legenda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Legenda', 'url'=>array('admin')),
);
?>

<h1>View Legenda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'version',
		't_chiave',
		't_descrizione',
		't_listaIdTipologie',
		't_sigla',
	),
)); ?>
