<?php
$this->breadcrumbs=array(
	'Tipologias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Tipologia', 'url'=>array('index')),
	array('label'=>'Create Tipologia', 'url'=>array('create')),
	array('label'=>'Update Tipologia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tipologia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipologia', 'url'=>array('admin')),
);
?>

<h1>View Tipologia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		//'version',
		//'b_Pubblica',
		//'t_descrizione',
		't_Tipologia',
		//'t_urlIcona',
	),
)); ?>

<h2><?php echo CHtml::encode('piante'); ?></h2>
<?php
	echo CHtml::openTag('ul');
	foreach($model->piante as $pianta) {
		echo CHtml::openTag('li');
		echo CHtml::link(CHtml::encode(CHtml::value($pianta, 't_nomeScientificoPianta')), array('pianta/view', 'id' => $pianta->id, true));
		echo CHtml::closeTag('li');
	}
	echo CHtml::closeTag('ul');
?>

