<?php
$this->breadcrumbs=array(
	'Proprietas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Proprieta', 'url'=>array('index')),
	array('label'=>'Create Proprieta', 'url'=>array('create')),
	array('label'=>'Update Proprieta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Proprieta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proprieta', 'url'=>array('admin')),
);
?>

<h1>View Proprieta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'version',
		'b_generale',
		'n_Ordine',
		't_dataManagerInput',
		't_DataManagerInputParam',
		't_dataManagerOutput',
		't_DataManagerOutputParam',
		't_Gruppo',
		't_Proprieta',
		't_SottoGruppo',
	),
)); ?>
