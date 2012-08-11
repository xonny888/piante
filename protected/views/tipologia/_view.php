<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Tipologia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->t_Tipologia), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_Pubblica')); ?>:</b>
	<?php echo CHtml::encode($data->b_Pubblica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_descrizione')); ?>:</b>
	<?php echo CHtml::encode($data->t_descrizione); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Tipologia')); ?>:</b>
	<?php echo CHtml::encode($data->t_Tipologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_urlIcona')); ?>:</b>
	<?php echo CHtml::encode($data->t_urlIcona); ?>
	<br />
	*/ ?>

</div>
