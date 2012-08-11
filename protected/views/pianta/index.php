<?php
$this->breadcrumbs=array(
	'Piantas',
);

$this->menu=array(
	array('label'=>'Create Pianta', 'url'=>array('create')),
	array('label'=>'Manage Pianta', 'url'=>array('admin')),
);
?>

<h1>Piantas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
