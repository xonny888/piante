<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_idPianta')); ?>:</b>
	<?php echo CHtml::encode($data->ll_idPianta); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_IdProprieta')); ?>:</b>
	<?php echo CHtml::encode($data->ll_IdProprieta); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_note')); ?>:</b>
	<?php echo CHtml::encode($data->t_note); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_valore')); ?>:</b>
	<?php echo CHtml::encode($data->t_valore); ?>
	<br />


</div>
