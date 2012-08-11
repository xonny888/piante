<?php
$this->breadcrumbs=array(
	'Legendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Legenda', 'url'=>array('index')),
	array('label'=>'Manage Legenda', 'url'=>array('admin')),
);
?>

<h1>Create Legenda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>