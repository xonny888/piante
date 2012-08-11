<?php
header('Content-Type: ' . $model->fileType);
echo $model->binaryFile; 
exit(); 
?>
