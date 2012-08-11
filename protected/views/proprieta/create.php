<?php
$this->breadcrumbs=array(
	'Proprietas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proprieta', 'url'=>array('index')),
	array('label'=>'Manage Proprieta', 'url'=>array('admin')),
);
?>

<h1>Create Proprieta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>