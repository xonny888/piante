<?php
$this->breadcrumbs=array(
	'Proprietas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Proprieta', 'url'=>array('index')),
	array('label'=>'Create Proprieta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('proprieta-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Proprietas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proprieta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'version',
		//'b_generale',
		'n_Ordine',
		//'t_dataManagerInput',
		array(
			'name'=>'t_dataManagerInput',
			'value'=>'$data->t_dataManagerInput',
			'filter'=>CHtml::listData(Proprieta::model()->findAll(array('select' => 't_dataManagerInput', 'group' => 't_dataManagerInput')), 't_dataManagerInput', 't_dataManagerInput'),
		),
		//'t_DataManagerInputParam',
		array(
			'name'=>'t_DataManagerInputParam',
			'value'=>'$data->t_DataManagerInputParam',
			'filter'=>CHtml::listData(Proprieta::model()->findAll(array('select' => 't_DataManagerInputParam', 'group' => 't_DataManagerInputParam')), 't_DataManagerInputParam', 't_DataManagerInputParam'),
		),
		//'t_dataManagerOutput',
		array(
			'name'=>'t_dataManagerOutput',
			'value'=>'$data->t_dataManagerOutput',
			'filter'=>CHtml::listData(Proprieta::model()->findAll(array('select' => 't_dataManagerOutput', 'group' => 't_dataManagerOutput')), 't_dataManagerOutput', 't_dataManagerOutput'),
		),
		//'t_DataManagerOutputParam',
		array(
			'name'=>'t_DataManagerOutputParam',
			'value'=>'$data->t_DataManagerOutputParam',
			'filter'=>CHtml::listData(Proprieta::model()->findAll(array('select' => 't_DataManagerOutputParam', 'group' => 't_DataManagerOutputParam')), 't_DataManagerOutputParam', 't_DataManagerOutputParam'),
		),
		//'t_Gruppo',
		array(
			'name'=>'t_Gruppo',
			'value'=>'$data->t_Gruppo',
			'filter'=>CHtml::listData(Proprieta::model()->findAll(array('select' => 't_Gruppo', 'group' => 't_Gruppo')), 't_Gruppo', 't_Gruppo'),
		),
		//'t_Proprieta',
		array(
			'name'=>'t_Proprieta',
			'value'=>'$data->t_Proprieta',
			'filter'=>CHtml::listData(Proprieta::model()->findAll(array('select' => 't_Proprieta', 'group' => 't_Proprieta')), 't_Proprieta', 't_Proprieta'),
		),
		//'t_SottoGruppo',
		array(
			'name'=>'t_SottoGruppo',
			'value'=>'$data->t_SottoGruppo',
			'filter'=>CHtml::listData(Proprieta::model()->findAll(array('select' => 't_SottoGruppo', 'group' => 't_SottoGruppo')), 't_SottoGruppo', 't_SottoGruppo'),
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
