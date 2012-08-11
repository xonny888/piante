<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipologia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'t_Tipologia'); ?>
		<?php echo $form->textField($model,'t_Tipologia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Tipologia'); ?>
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
		<?php echo $form->labelEx($model,'t_descrizione'); ?>
		<?php echo $form->textField($model,'t_descrizione',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_descrizione'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_Tipologia'); ?>
		<?php echo $form->textField($model,'t_Tipologia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Tipologia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_urlIcona'); ?>
		<?php echo $form->textField($model,'t_urlIcona',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_urlIcona'); ?>
	</div>
	*/ ?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
