<?php
$this->breadcrumbs=array(
	'Piantas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pianta', 'url'=>array('index')),
	array('label'=>'Manage Pianta', 'url'=>array('admin')),
);
?>

<h1>Create Pianta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>