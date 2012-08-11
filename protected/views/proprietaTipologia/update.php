<?php
$this->breadcrumbs=array(
	'Proprieta Tipologias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProprietaTipologia', 'url'=>array('index')),
	array('label'=>'Create ProprietaTipologia', 'url'=>array('create')),
	array('label'=>'View ProprietaTipologia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProprietaTipologia', 'url'=>array('admin')),
);
?>

<h1>Update ProprietaTipologia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>