<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_chiave')); ?>:</b>
	<?php echo CHtml::encode($data->t_chiave); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_descrizione')); ?>:</b>
	<?php echo CHtml::encode($data->t_descrizione); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_listaIdTipologie')); ?>:</b>
	<?php echo CHtml::encode($data->t_listaIdTipologie); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_sigla')); ?>:</b>
	<?php echo CHtml::encode($data->t_sigla); ?>
	<br />


</div>
