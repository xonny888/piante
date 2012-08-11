<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_IdProprieta')); ?>:</b>
	<?php echo CHtml::encode($data->ll_IdProprieta); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_IdTipologia')); ?>:</b>
	<?php echo CHtml::encode($data->ll_IdTipologia); ?>
	<br />


</div>
