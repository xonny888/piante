<?php
$this->breadcrumbs=array(
	'Proprieta Piantas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProprietaPianta', 'url'=>array('index')),
	array('label'=>'Manage ProprietaPianta', 'url'=>array('admin')),
);
?>

<h1>Create ProprietaPianta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>