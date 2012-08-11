<?php
$this->breadcrumbs=array(
	'Proprietas',
);

$this->menu=array(
	array('label'=>'Create Proprieta', 'url'=>array('create')),
	array('label'=>'Manage Proprieta', 'url'=>array('admin')),
);
?>

<h1>Proprietas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
