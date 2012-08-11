<?php
$this->breadcrumbs=array(
	'Proprieta Tipologias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProprietaTipologia', 'url'=>array('index')),
	array('label'=>'Manage ProprietaTipologia', 'url'=>array('admin')),
);
?>

<h1>Create ProprietaTipologia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>