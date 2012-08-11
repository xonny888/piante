<?php
header('Content-Type: ' . $model->fileType);
echo $model->binaryFile; 
//CHtml::image(Yii::app()->controller->createUrl('foto/loadImage', array('id'=>$model->id)), $model->pianta->t_nomeScientificoPianta);
exit(); 
?>
