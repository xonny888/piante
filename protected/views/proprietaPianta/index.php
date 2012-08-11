<?php
$this->breadcrumbs=array(
	'Proprieta Piantas',
);

$this->menu=array(
	array('label'=>'Create ProprietaPianta', 'url'=>array('create')),
	array('label'=>'Manage ProprietaPianta', 'url'=>array('admin')),
);
?>

<h1>Proprieta Piantas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
