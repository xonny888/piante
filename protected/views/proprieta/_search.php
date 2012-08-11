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
		<?php echo $form->label($model,'b_generale'); ?>
		<?php echo $form->textField($model,'b_generale'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'n_Ordine'); ?>
		<?php echo $form->textField($model,'n_Ordine'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_dataManagerInput'); ?>
		<?php echo $form->textField($model,'t_dataManagerInput',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_DataManagerInputParam'); ?>
		<?php echo $form->textField($model,'t_DataManagerInputParam',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_dataManagerOutput'); ?>
		<?php echo $form->textField($model,'t_dataManagerOutput',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_DataManagerOutputParam'); ?>
		<?php echo $form->textField($model,'t_DataManagerOutputParam',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_Gruppo'); ?>
		<?php echo $form->textField($model,'t_Gruppo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_Proprieta'); ?>
		<?php echo $form->textField($model,'t_Proprieta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_SottoGruppo'); ?>
		<?php echo $form->textField($model,'t_SottoGruppo',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->