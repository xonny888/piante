<?php
$this->breadcrumbs=array(
	'Proprieta Tipologias',
);

$this->menu=array(
	array('label'=>'Create ProprietaTipologia', 'url'=>array('create')),
	array('label'=>'Manage ProprietaTipologia', 'url'=>array('admin')),
);
?>

<h1>Proprieta Tipologias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
