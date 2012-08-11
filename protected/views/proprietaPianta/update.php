<?php
$this->breadcrumbs=array(
	'Proprieta Piantas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProprietaPianta', 'url'=>array('index')),
	array('label'=>'Create ProprietaPianta', 'url'=>array('create')),
	array('label'=>'View ProprietaPianta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProprietaPianta', 'url'=>array('admin')),
);
?>

<h1>Update ProprietaPianta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>