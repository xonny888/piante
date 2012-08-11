<?php
$this->breadcrumbs=array(
	'Proprietas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proprieta', 'url'=>array('index')),
	array('label'=>'Create Proprieta', 'url'=>array('create')),
	array('label'=>'View Proprieta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Proprieta', 'url'=>array('admin')),
);
?>

<h1>Update Proprieta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>