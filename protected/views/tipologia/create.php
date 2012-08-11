<?php
$this->breadcrumbs=array(
	'Tipologias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipologia', 'url'=>array('index')),
	array('label'=>'Manage Tipologia', 'url'=>array('admin')),
);
?>

<h1>Create Tipologia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>