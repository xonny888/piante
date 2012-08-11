<?php
$this->breadcrumbs=array(
	'Piantas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pianta', 'url'=>array('index')),
	array('label'=>'Create Pianta', 'url'=>array('create')),
	array('label'=>'Update Pianta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pianta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pianta', 'url'=>array('admin')),
);
?>

<h1>Pianta <?php echo $model->t_nomeScientificoPianta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		't_nomeScientificoPianta',
		't_nomePianta',
		't_nomiPianta',
		't_ListaSinonimi',
		't_Famiglia',
		array(
			'name' => 'tipologia',
			'type' => 'raw',
			'value' => CHtml::link(CHtml::encode($model->tipologia->t_Tipologia), array('tipologia/view', 'id' => $model->tipologia->id, true)),
		),
		't_GiudizioRiassuntivo',
		't_Note',
		't_NoteInterne',
		//'version',
		//'b_Pubblica',
		//'d_Inserimento',
		//'ll_idPiantaPrecedente',
		//'ll_IdTipologia',
		//'n_codOldDB',
	),
)); ?>

<!--<h2><?php echo CHtml::encode('foto'); ?></h2>-->
<?php
	/*
	$fotografie = Yii::app()->db->createCommand()
		->select('id, ll_idPianta, t_didascalia, t_IdFoto')
		->from('foto')
		->where('ll_idPianta=:ll_idPianta', array(':ll_idPianta'=>$model->id))
		->order('t_IdFoto asc')
		->queryAll();
	*/
	//var_dump($fotografie);
	//$foto = new Foto;
	//echo CHtml::openTag('ul');
	foreach($model->fotografie as $foto) {
		//var_dump($foto);
		//echo CHtml::openTag('li');
		//echo CHtml::link(CHtml::encode(CHtml::value($foto, 't_IdFoto')), array('foto/view', 'id' => $foto->id, true));
		/*
		echo CHtml::link(CHtml::image(Yii::app()->controller->createUrl('foto/loadImage', array('id'=>$foto->id))
		, 'alt', array('width'=>'30px', 'height'=>'30px'))
		, array(Yii::app()->controller->createUrl('foto/displaySavedImage', array('id'=>$foto->id))));
		*/
		$srcimg = Yii::app()->controller->createUrl('foto/loadimage', array('id'=>$foto->id));
		$urlimg = Yii::app()->controller->createUrl('foto/viewSavedImage', array('id'=>$foto->id));
		//$srcimg = 'foto/loadimage', 'id' => $foto->id;
		//$urlimg = array('foto/displaySavedImage', 'id' => $foto->id);
		//echo $srcimg;
		
		echo CHtml::link(CHtml::image($srcimg, $model->t_nomeScientificoPianta, array('width'=>'50px', 'height'=>'50px')), $urlimg);
		
		//echo CHtml::closeTag('li');
	}
	//echo CHtml::closeTag('ul');
?>
<?php /*
<h2><?php echo CHtml::encode('proprietà'); ?></h2>
<?php
	echo CHtml::openTag('ul');
	foreach($model->proprietas as $proprieta) {
		echo CHtml::openTag('li');
		//var_dump($proprieta->id);
		//echo CHtml::link(CHtml::encode(CHtml::value($proprieta, 'll_IdProprieta')), array('proprietaPianta/view', 'id' => $proprieta->id, true));
		echo ' ' . CHtml::encode(CHtml::value($proprieta, 'id'));
		echo ' ' . CHtml::encode(CHtml::value($proprieta, 't_Gruppo'));
		echo ' ' . CHtml::encode(CHtml::value($proprieta, 't_Proprieta'));
		echo CHtml::closeTag('li');
	}
	echo CHtml::closeTag('ul');
?>
*/ ?>
<?php /*
<h2><?php echo CHtml::encode('proprietà'); ?></h2>
<?php
	echo CHtml::openTag('ul');
	foreach($model->proprietaPianta as $proprieta) {
		echo CHtml::openTag('li');
		//var_dump($proprieta->id);
		echo CHtml::link(CHtml::encode(CHtml::value($proprieta, 'll_IdProprieta')), array('proprieta/view', 'id' => $proprieta->ll_IdProprieta, true));
		echo ' ' . CHtml::encode(CHtml::value($proprieta, 'll_IdProprieta'));
		echo ' ' . CHtml::encode(CHtml::value($proprieta, 't_valore'));
		echo ' ' . CHtml::encode(CHtml::value($proprieta, 't_note'));
		echo CHtml::closeTag('li');
	}
	echo CHtml::closeTag('ul');
?>
* */ ?>
<?php /*
<?php $gruppo = 'Caratteristiche principali' ?>
<h2><?php echo CHtml::encode($gruppo); ?></h2>
<?php
	$sqlcount='SELECT COUNT(*)';
	$sqlselect='SELECT *';
	$sqlselect2=' , (SELECT t_Proprieta FROM proprieta p WHERE p.id = pp.ll_idProprieta) t_Proprieta';
	$sqlwhere = ' FROM proprietaPianta pp, proprieta p WHERE pp.ll_idPianta = ' . $model->id;
	$sqlwhere = $sqlwhere . ' AND p.id = pp.ll_idProprieta';
	$sqlwhere = $sqlwhere . ' AND t_gruppo = "' . $gruppo . '"';
	$count=Yii::app()->db->createCommand($sqlcount . $sqlwhere)->queryScalar();
	//$sql=$sqlselect . $sqlwhere;
	$dataProvider=new CSqlDataProvider($sqlselect . $sqlselect2 . $sqlwhere, array(
	//$dataProvider=new CSqlDataProvider($sqlselect . $sqlwhere, array(
		'totalItemCount'=>$count,
		'sort'=>array('attributes'=>array('id', 'll_IdProprieta',),),
		'pagination'=>array('pageSize'=>40,),
	));

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proprietaPianta-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'll_idPianta',

		'll_IdProprieta',
		't_Proprieta',
		't_valore',
		't_note',
		//array('class'=>'CButtonColumn',),
	),
)); ?>

<?php $gruppo = 'Caratteristiche botaniche' ?>
<h2><?php echo CHtml::encode($gruppo); ?></h2>
<?php
	$sqlcount='SELECT COUNT(*)';
	$sqlselect='SELECT *';
	$sqlselect2=' , (SELECT t_Proprieta FROM proprieta p WHERE p.id = pp.ll_idProprieta) t_Proprieta';
	$sqlwhere = ' FROM proprietaPianta pp, proprieta p WHERE pp.ll_idPianta = ' . $model->id;
	$sqlwhere = $sqlwhere . ' AND p.id = pp.ll_idProprieta';
	$sqlwhere = $sqlwhere . ' AND t_gruppo = "' . $gruppo . '"';
	$count=Yii::app()->db->createCommand($sqlcount . $sqlwhere)->queryScalar();
	//$sql=$sqlselect . $sqlwhere;
	$dataProvider=new CSqlDataProvider($sqlselect . $sqlselect2 . $sqlwhere, array(
	//$dataProvider=new CSqlDataProvider($sqlselect . $sqlwhere, array(
		'totalItemCount'=>$count,
		'sort'=>array('attributes'=>array('id', 'll_IdProprieta',),),
		'pagination'=>array('pageSize'=>40,),
	));

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proprietaPianta-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'll_idPianta',

		'll_IdProprieta',
		't_Proprieta',
		't_valore',
		't_note',
		//array('class'=>'CButtonColumn',),
	),
)); ?>
<?php $gruppo = 'Caratteristiche morfologiche' ?>
<h2><?php echo CHtml::encode($gruppo); ?></h2>
<?php
	$sqlcount='SELECT COUNT(*)';
	$sqlselect='SELECT *';
	$sqlselect2=' , (SELECT t_Proprieta FROM proprieta p WHERE p.id = pp.ll_idProprieta) t_Proprieta';
	$sqlwhere = ' FROM proprietaPianta pp, proprieta p WHERE pp.ll_idPianta = ' . $model->id;
	$sqlwhere = $sqlwhere . ' AND p.id = pp.ll_idProprieta';
	$sqlwhere = $sqlwhere . ' AND t_gruppo = "' . $gruppo . '"';
	$count=Yii::app()->db->createCommand($sqlcount . $sqlwhere)->queryScalar();
	//$sql=$sqlselect . $sqlwhere;
	$dataProvider=new CSqlDataProvider($sqlselect . $sqlselect2 . $sqlwhere, array(
	//$dataProvider=new CSqlDataProvider($sqlselect . $sqlwhere, array(
		'totalItemCount'=>$count,
		'sort'=>array('attributes'=>array('id', 'll_IdProprieta',),),
		'pagination'=>array('pageSize'=>40,),
	));

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proprietaPianta-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
		'id',
		'll_idPianta',

		'll_IdProprieta',
		't_Proprieta',
		't_valore',
		't_note',
		//array('class'=>'CButtonColumn',),
	),
)); ?>
*/ ?>
<?php $gruppo = 'Caratteristiche' ?>
<!--<h2><?php echo CHtml::encode($gruppo); ?></h2>-->
<?php
	$sqlcount='SELECT COUNT(*)';
	$sqlselect='SELECT *';
	$sqlselect2=' , (SELECT t_Proprieta FROM proprieta p WHERE p.id = pp.ll_idProprieta) t_Proprieta';
	$sqlwhere = ' FROM proprietaPianta pp, proprieta p, proprietaTipologia pt WHERE pp.ll_idPianta = ' . $model->id;
	//$sqlwhere = $sqlwhere . ' AND (pp.t_valore <> "" OR pp.t_note <> "")';
	$sqlwhere = $sqlwhere . ' AND p.id = pp.ll_idProprieta';
	$sqlwhere = $sqlwhere . ' AND pt.ll_IdTipologia = ' .$model->ll_IdTipologia;
	$sqlwhere = $sqlwhere . ' AND pt.ll_IdProprieta = pp.ll_idProprieta';
	$sqlwhere = $sqlwhere . ' ORDER BY t_gruppo';
	$count=Yii::app()->db->createCommand($sqlcount . $sqlwhere)->queryScalar();
	//$sql=$sqlselect . $sqlwhere;
	$dataProvider=new CSqlDataProvider($sqlselect . $sqlselect2 . $sqlwhere, array(
	//$dataProvider=new CSqlDataProvider($sqlselect . $sqlwhere, array(
		'totalItemCount'=>$count,
		'sort'=>array('attributes'=>array('id', 'll_IdProprieta',),),
		'pagination'=>array('pageSize'=>40,),
	));

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proprietaPianta-grid',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		//'ll_idPianta',
		//'ll_IdProprieta',
		't_Proprieta',
		't_valore',
		't_note',
		't_Gruppo',
		//array('class'=>'CButtonColumn',),
	),
)); ?>
