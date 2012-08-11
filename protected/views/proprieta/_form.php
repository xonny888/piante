<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proprieta-form',
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
		<?php echo $form->labelEx($model,'b_generale'); ?>
		<?php echo $form->textField($model,'b_generale'); ?>
		<?php echo $form->error($model,'b_generale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'n_Ordine'); ?>
		<?php echo $form->textField($model,'n_Ordine'); ?>
		<?php echo $form->error($model,'n_Ordine'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_dataManagerInput'); ?>
		<?php echo $form->textField($model,'t_dataManagerInput',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_dataManagerInput'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_DataManagerInputParam'); ?>
		<?php echo $form->textField($model,'t_DataManagerInputParam',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_DataManagerInputParam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_dataManagerOutput'); ?>
		<?php echo $form->textField($model,'t_dataManagerOutput',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_dataManagerOutput'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_DataManagerOutputParam'); ?>
		<?php echo $form->textField($model,'t_DataManagerOutputParam',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_DataManagerOutputParam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_Gruppo'); ?>
		<?php echo $form->textField($model,'t_Gruppo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Gruppo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_Proprieta'); ?>
		<?php echo $form->textField($model,'t_Proprieta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_Proprieta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_SottoGruppo'); ?>
		<?php echo $form->textField($model,'t_SottoGruppo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'t_SottoGruppo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->