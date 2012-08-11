<?php
$this->breadcrumbs=array(
	'Tipologias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipologia', 'url'=>array('index')),
	array('label'=>'Create Tipologia', 'url'=>array('create')),
	array('label'=>'View Tipologia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tipologia', 'url'=>array('admin')),
);
?>

<h1>Update Tipologia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>