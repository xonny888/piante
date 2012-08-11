<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'foto-form',
	'enableAjaxValidation'=>false,
	'method'=>'post',
    //'type'=>'horizontal',
    'htmlOptions'=>array('enctype'=>'multipart/form-data')
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ll_idPianta'); ?>
		<?php echo $form->textField($model,'ll_idPianta'); ?>
		<?php echo $form->error($model,'ll_idPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_didascalia'); ?>
		<?php echo $form->textField($model,'t_didascalia',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_didascalia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_IdFoto'); ?>
		<?php echo $form->textField($model,'t_IdFoto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_IdFoto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'binaryFile'); ?>
		<?php echo $form->fileField($model,'binaryFile'); ?>
		<?php echo $form->error($model,'binaryFile'); ?>
	</div>
	<?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'fileName'); ?>
		<?php echo $form->textField($model,'fileName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fileName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fileType'); ?>
		<?php echo $form->textField($model,'fileType',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fileType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fileSize'); ?>
		<?php echo $form->textField($model,'fileSize'); ?>
		<?php echo $form->error($model,'fileSize'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fileWidth'); ?>
		<?php echo $form->textField($model,'fileWidth'); ?>
		<?php echo $form->error($model,'fileWidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fileHeight'); ?>
		<?php echo $form->textField($model,'fileHeight'); ?>
		<?php echo $form->error($model,'fileHeight'); ?>
	</div>
	*/ ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
