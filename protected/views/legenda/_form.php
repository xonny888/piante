<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'legenda-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
		<?php echo $form->error($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_chiave'); ?>
		<?php echo $form->textField($model,'t_chiave',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_chiave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_descrizione'); ?>
		<?php echo $form->textField($model,'t_descrizione',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_descrizione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_listaIdTipologie'); ?>
		<?php echo $form->textField($model,'t_listaIdTipologie',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_listaIdTipologie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_sigla'); ?>
		<?php echo $form->textField($model,'t_sigla',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_sigla'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->