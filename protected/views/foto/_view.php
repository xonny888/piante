<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	
	<?php echo CHtml::link(CHtml::image(Yii::app()->controller->createUrl('foto/loadImage', array('id'=>$data->id)), '', array('width'=>'40px', 'height'=>'40px')), array('viewSavedImage','id'=>$data->id)); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('ll_idPianta')); ?>:</b>
	<?php echo CHtml::encode($data->ll_idPianta); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_didascalia')); ?>:</b>
	<?php echo CHtml::encode($data->t_didascalia); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_IdFoto')); ?>:</b>
	<?php echo CHtml::encode($data->t_IdFoto); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileName')); ?>:</b>
	<?php echo CHtml::encode($data->fileName); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileType')); ?>:</b>
	<?php echo CHtml::encode($data->fileType); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileSize')); ?>:</b>
	<?php echo CHtml::encode($data->fileSize); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileWidth')); ?>:</b>
	<?php echo CHtml::encode($data->fileWidth); ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fileHeight')); ?>:</b>
	<?php echo CHtml::encode($data->fileHeight); ?>
	<br />


</div>
