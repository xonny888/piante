<?php
$this->breadcrumbs=array(
	'Piantas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Pianta', 'url'=>array('index')),
	array('label'=>'Create Pianta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pianta-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Piantas</h1>

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
	'id'=>'pianta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'version',
		//'b_Pubblica',
		//'d_Inserimento',
		//'ll_idPiantaPrecedente',
		//'n_codOldDB',
		't_nomeScientificoPianta',
		't_nomePianta',
		't_nomiPianta',
		't_ListaSinonimi',
		//'t_Famiglia',
		array(
			'name'=>'t_Famiglia',
			'value'=>'$data->t_Famiglia',
			'filter'=>CHtml::listData(Pianta::model()->findAll(array('select' => 't_Famiglia', 'group' => 't_Famiglia')), 't_Famiglia', 't_Famiglia'),
		),
		//'ll_IdTipologia',
		//'tipologia.t_Tipologia',
		array(
			'name'=>'ll_IdTipologia',
			'value'=>'$data->tipologia->t_Tipologia',
			'filter'=>CHtml::listData(Tipologia::model()->findAll(), 'id', 't_Tipologia'),
		),
		//'t_GiudizioRiassuntivo',
		//'t_Note',
		//'t_NoteInterne',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
