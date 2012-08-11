<?php
$this->breadcrumbs=array(
	'Piantas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pianta', 'url'=>array('index')),
	array('label'=>'Create Pianta', 'url'=>array('create')),
	array('label'=>'View Pianta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pianta', 'url'=>array('admin')),
);
?>

<h1>Update Pianta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>