<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pianta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'t_nomeScientificoPianta'); ?>
		<?php echo $form->textField($model,'t_nomeScientificoPianta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_nomeScientificoPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_nomePianta'); ?>
		<?php echo $form->textField($model,'t_nomePianta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_nomePianta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'t_nomiPianta'); ?>
		<?php echo $form->textField($model,'t_nomiPianta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_nomiPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_ListaSinonimi'); ?>
		<?php echo $form->textField($model,'t_ListaSinonimi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_ListaSinonimi'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'t_Famiglia'); ?>
		<?php echo $form->textField($model,'t_Famiglia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Famiglia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ll_IdTipologia'); ?>
		<?php echo $form->dropDownList($model, 'll_IdTipologia', CHtml::listData(Tipologia::model()->findAll(), 'id', 't_Tipologia')); ?>
		<?php echo $form->error($model,'Tipologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_GiudizioRiassuntivo'); ?>
		<?php echo $form->textField($model,'t_GiudizioRiassuntivo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_GiudizioRiassuntivo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'t_Note'); ?>
		<?php echo $form->textField($model,'t_Note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_NoteInterne'); ?>
		<?php echo $form->textField($model,'t_NoteInterne',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_NoteInterne'); ?>
	</div>
		
	<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'b_Pubblica'); ?>
		<?php echo $form->textField($model,'b_Pubblica'); ?>
		<?php echo $form->error($model,'b_Pubblica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d_Inserimento'); ?>
		<?php echo $form->textField($model,'d_Inserimento'); ?>
		<?php echo $form->error($model,'d_Inserimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ll_idPiantaPrecedente'); ?>
		<?php echo $form->textField($model,'ll_idPiantaPrecedente'); ?>
		<?php echo $form->error($model,'ll_idPiantaPrecedente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ll_IdTipologia'); ?>
		<?php echo $form->textField($model,'ll_IdTipologia'); ?>
		<?php echo $form->error($model,'ll_IdTipologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_codOldDB'); ?>
		<?php echo $form->textField($model,'n_codOldDB'); ?>
		<?php echo $form->error($model,'n_codOldDB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_Famiglia'); ?>
		<?php echo $form->textField($model,'t_Famiglia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Famiglia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_GiudizioRiassuntivo'); ?>
		<?php echo $form->textField($model,'t_GiudizioRiassuntivo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_GiudizioRiassuntivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_ListaSinonimi'); ?>
		<?php echo $form->textField($model,'t_ListaSinonimi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_ListaSinonimi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_nomePianta'); ?>
		<?php echo $form->textField($model,'t_nomePianta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_nomePianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_nomeScientificoPianta'); ?>
		<?php echo $form->textField($model,'t_nomeScientificoPianta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_nomeScientificoPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_nomiPianta'); ?>
		<?php echo $form->textField($model,'t_nomiPianta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_nomiPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_Note'); ?>
		<?php echo $form->textField($model,'t_Note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_NoteInterne'); ?>
		<?php echo $form->textField($model,'t_NoteInterne',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_NoteInterne'); ?>
	</div>
	*/ ?>


	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
