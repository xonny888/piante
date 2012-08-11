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
		<?php echo $form->label($model,'version'); ?>
		<?php echo $form->textField($model,'version'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ll_idPianta'); ?>
		<?php echo $form->textField($model,'ll_idPianta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ll_IdProprieta'); ?>
		<?php echo $form->textField($model,'ll_IdProprieta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_note'); ?>
		<?php echo $form->textField($model,'t_note',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_valore'); ?>
		<?php echo $form->textField($model,'t_valore',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->