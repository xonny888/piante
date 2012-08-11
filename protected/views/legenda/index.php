<?php
$this->breadcrumbs=array(
	'Legendas',
);

$this->menu=array(
	array('label'=>'Create Legenda', 'url'=>array('create')),
	array('label'=>'Manage Legenda', 'url'=>array('admin')),
);
?>

<h1>Legendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
