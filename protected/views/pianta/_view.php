<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_nomeScientificoPianta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->t_nomeScientificoPianta), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_nomePianta')); ?>:</b>
	<?php echo CHtml::encode($data->t_nomePianta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_nomiPianta')); ?>:</b>
	<?php echo CHtml::encode($data->t_nomiPianta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_ListaSinonimi')); ?>:</b>
	<?php echo CHtml::encode($data->t_ListaSinonimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Famiglia')); ?>:</b>
	<?php echo CHtml::encode($data->t_Famiglia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_IdTipologia')); ?>:</b>
	<?php echo CHtml::encode($data->tipologia->t_Tipologia); ?>
	
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('t_GiudizioRiassuntivo')); ?>:</b>
	<?php echo CHtml::encode($data->t_GiudizioRiassuntivo); ?>
	
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Note')); ?>:</b>
	<?php echo CHtml::encode($data->t_Note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_NoteInterne')); ?>:</b>
	<?php echo CHtml::encode($data->t_NoteInterne); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_Inserimento')); ?>:</b>
	<?php echo CHtml::encode($data->d_Inserimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_idPiantaPrecedente')); ?>:</b>
	<?php echo CHtml::encode($data->ll_idPiantaPrecedente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_IdTipologia')); ?>:</b>
	<?php echo CHtml::encode($data->ll_IdTipologia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('n_codOldDB')); ?>:</b>
	<?php echo CHtml::encode($data->n_codOldDB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Famiglia')); ?>:</b>
	<?php echo CHtml::encode($data->t_Famiglia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_GiudizioRiassuntivo')); ?>:</b>
	<?php echo CHtml::encode($data->t_GiudizioRiassuntivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_ListaSinonimi')); ?>:</b>
	<?php echo CHtml::encode($data->t_ListaSinonimi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_nomePianta')); ?>:</b>
	<?php echo CHtml::encode($data->t_nomePianta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_nomeScientificoPianta')); ?>:</b>
	<?php echo CHtml::encode($data->t_nomeScientificoPianta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_nomiPianta')); ?>:</b>
	<?php echo CHtml::encode($data->t_nomiPianta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_Note')); ?>:</b>
	<?php echo CHtml::encode($data->t_Note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_NoteInterne')); ?>:</b>
	<?php echo CHtml::encode($data->t_NoteInterne); ?>
	<br />

	*/ ?>

</div>
