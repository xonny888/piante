<?php
$this->breadcrumbs=array(
	'Legendas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Legenda', 'url'=>array('index')),
	array('label'=>'Create Legenda', 'url'=>array('create')),
	array('label'=>'View Legenda', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Legenda', 'url'=>array('admin')),
);
?>

<h1>Update Legenda <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>