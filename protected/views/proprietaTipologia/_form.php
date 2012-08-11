<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proprieta-tipologia-form',
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
		<?php echo $form->labelEx($model,'ll_IdProprieta'); ?>
		<?php echo $form->textField($model,'ll_IdProprieta'); ?>
		<?php echo $form->error($model,'ll_IdProprieta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ll_IdTipologia'); ?>
		<?php echo $form->textField($model,'ll_IdTipologia'); ?>
		<?php echo $form->error($model,'ll_IdTipologia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->