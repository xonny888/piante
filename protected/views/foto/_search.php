<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ll_idPianta'); ?>
		<?php echo $form->textField($model,'ll_idPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_didascalia'); ?>
		<?php echo $form->textField($model,'t_didascalia',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_IdFoto'); ?>
		<?php echo $form->textField($model,'t_IdFoto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'binaryFile'); ?>
		<?php echo $form->textField($model,'binaryFile'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileName'); ?>
		<?php echo $form->textField($model,'fileName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileType'); ?>
		<?php echo $form->textField($model,'fileType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileSize'); ?>
		<?php echo $form->textField($model,'fileSize'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileWidth'); ?>
		<?php echo $form->textField($model,'fileWidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fileHeight'); ?>
		<?php echo $form->textField($model,'fileHeight'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->