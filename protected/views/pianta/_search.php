<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'t_nomeScientificoPianta'); ?>
		<?php echo $form->textField($model,'t_nomeScientificoPianta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_nomePianta'); ?>
		<?php echo $form->textField($model,'t_nomePianta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_nomiPianta'); ?>
		<?php echo $form->textField($model,'t_nomiPianta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_ListaSinonimi'); ?>
		<?php echo $form->textField($model,'t_ListaSinonimi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_Famiglia'); ?>
		<?php echo $form->textField($model,'t_Famiglia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ll_IdTipologia'); ?>
		<?php echo $form->dropDownList($model, 'll_IdTipologia', CHtml::listData(Tipologia::model()->findAll(), 'id', 't_Tipologia')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_Note'); ?>
		<?php echo $form->textField($model,'t_Note',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_NoteInterne'); ?>
		<?php echo $form->textField($model,'t_NoteInterne',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	
	<?php /*
	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'b_Pubblica'); ?>
		<?php echo $form->textField($model,'b_Pubblica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d_Inserimento'); ?>
		<?php echo $form->textField($model,'d_Inserimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ll_idPiantaPrecedente'); ?>
		<?php echo $form->textField($model,'ll_idPiantaPrecedente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ll_IdTipologia'); ?>
		<?php echo $form->textField($model,'ll_IdTipologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_codOldDB'); ?>
		<?php echo $form->textField($model,'n_codOldDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_Famiglia'); ?>
		<?php echo $form->textField($model,'t_Famiglia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_GiudizioRiassuntivo'); ?>
		<?php echo $form->textField($model,'t_GiudizioRiassuntivo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_ListaSinonimi'); ?>
		<?php echo $form->textField($model,'t_ListaSinonimi',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_nomePianta'); ?>
		<?php echo $form->textField($model,'t_nomePianta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_nomeScientificoPianta'); ?>
		<?php echo $form->textField($model,'t_nomeScientificoPianta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_nomiPianta'); ?>
		<?php echo $form->textField($model,'t_nomiPianta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_Note'); ?>
		<?php echo $form->textField($model,'t_Note',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_NoteInterne'); ?>
		<?php echo $form->textField($model,'t_NoteInterne',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	*/ ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
