<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proprieta-pianta-form',
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
		<?php echo $form->labelEx($model,'ll_idPianta'); ?>
		<?php echo $form->textField($model,'ll_idPianta'); ?>
		<?php echo $form->error($model,'ll_idPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ll_IdProprieta'); ?>
		<?php echo $form->textField($model,'ll_IdProprieta'); ?>
		<?php echo $form->error($model,'ll_IdProprieta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_note'); ?>
		<?php echo $form->textField($model,'t_note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_valore'); ?>
		<?php echo $form->textField($model,'t_valore',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_valore'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->