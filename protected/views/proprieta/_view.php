<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('version')); ?>:</b>
	<?php echo CHtml::encode($data->version); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('b_generale')); ?>:</b>
	<?php echo CHtml::encode($data->b_generale); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_Ordine')); ?>:</b>
	<?php echo CHtml::encode($data->n_Ordine); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_dataManagerInput')); ?>:</b>
	<?php echo CHtml::encode($data->t_dataManagerInput); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_DataManagerInputParam')); ?>:</b>
	<?php echo CHtml::encode($data->t_DataManagerInputParam); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_dataManagerOutput')); ?>:</b>
	<?php echo CHtml::encode($data->t_dataManagerOutput); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_DataManagerOutputParam')); ?>:</b>
	<?php echo CHtml::encode($data->t_DataManagerOutputParam); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Gruppo')); ?>:</b>
	<?php echo CHtml::encode($data->t_Gruppo); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Proprieta')); ?>:</b>
	<?php echo CHtml::encode($data->t_Proprieta); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_SottoGruppo')); ?>:</b>
	<?php echo CHtml::encode($data->t_SottoGruppo); ?>
	<br />

	<?php /*

	*/ ?>

</div>
