<?php

class FotoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'displaysavedimage', 'viewsavedimage', 'loadimage'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'loadimage'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete', 'migra'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionMigra()
	{
		$model=Foto::model();

		//$transaction=$model->dbConnection->beginTransaction();
		try
		{
			
			$criteria=new CDbCriteria;
			$criteria->condition='id>:id';
			$criteria->params=array(':id'=>500);
			$fotografie=$model->findAll($criteria); // $params is not needed
			//$fotografie=$model->findAll();

			foreach($fotografie as $foto)
			{
				//$model=new Foto;
				$file = Yii::app()->basePath . '/fotoPiante/' . $foto->t_IdFoto . '.jpg';
				$fp = fopen($file, 'r');
				$content = fread($fp, filesize($file));
				list($width, $height, $type, $attr) = getimagesize($file);
				$foto->fileName = $foto->t_IdFoto . '.jpg';
				$foto->fileType = $type;
				$foto->fileSize = filesize($file);
				$foto->fileWidth = $width;
				$foto->fileHeight = $height;
				//var_dump($foto);
				$foto->binaryFile = $content;
				//$foto->save();
				if($foto->save())
				{
					// data is valid and is successfully inserted/updated
					echo ' ' . $foto->t_IdFoto;
					echo ' ' . $foto->fileName;
					echo ' ' . $foto->fileType;
					echo ' ' . $foto->fileSize;
					echo ' ' . $foto->fileWidth;
					echo ' ' . $foto->fileHeight;
					echo '</br>';
				}
				else
				{
					echo 'errore save: ' . $foto->t_IdFoto .  '</br>';
				}
				fclose($fp);
				//$transaction->commit();
			}
		}
		catch(Exception $e)
		{
			//$transaction->rollback();
			throw new CHttpException(999,'errore save ');
		} 
		/*
		$file = CUploadedFile::getInstance($model,'binaryFile');
		$model->fileName = $file->name;
		$model->fileType = $file->type;
		$model->fileSize = $file->size;
		$fp = fopen($file->tempName, 'r');
		$content = fread($fp, filesize($file->tempName));
		
		list($width, $height, $type, $attr) = getimagesize($file->tempName);
		//@list($width, $height , $imtype, ) = getimagesize($_FILES['binaryFile']['tmp_name']);
		$model->fileWidth = $width;
		$model->fileHeight = $height;

		fclose($fp);
		$model->binaryFile = $content;
		*/
	}
	
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Foto;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Foto']))
		{
			$model->attributes=$_POST['Foto'];

            if(!empty($_FILES['Foto']['tmp_name']['binaryFile']))
            {
                $file = CUploadedFile::getInstance($model,'binaryFile');
                $model->fileName = $file->name;
                $model->fileType = $file->type;
                $model->fileSize = $file->size;
                $fp = fopen($file->tempName, 'r');
                $content = fread($fp, filesize($file->tempName));
                
				list($width, $height, $type, $attr) = getimagesize($file->tempName);
                //@list($width, $height , $imtype, ) = getimagesize($_FILES['binaryFile']['tmp_name']);
                $model->fileWidth = $width;
                $model->fileHeight = $height;

				fclose($fp);
                $model->binaryFile = $content;
            }
            
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Foto']))
		{
			$model->attributes=$_POST['Foto'];
 
            if(!empty($_FILES['Foto']['tmp_name']['binaryFile']))
            {
                $file = CUploadedFile::getInstance($model,'binaryFile');
                $model->fileName = $file->name;
                $model->fileType = $file->type;
                $model->fileSize = $file->size;
                $fp = fopen($file->tempName, 'r');
                $content = fread($fp, filesize($file->tempName));
				list($width, $height, $type, $attr) = getimagesize($file->tempName);
                //@list($width, $height , $imtype, ) = getimagesize($_FILES['binaryFile']['tmp_name']);
                $model->fileWidth = $width;
                $model->fileHeight = $height;
                fclose($fp);
                $model->binaryFile = $content;
            }
 
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Foto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Foto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Foto']))
			$model->attributes=$_GET['Foto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Foto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='foto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionloadImage($id)
		{
			$model=$this->loadModel($id);
			$this->renderPartial('image', array(
				'model'=>$model
			));
		}
    	
	/**
	 * Opens the dialog in browser to open/save the image.
	 */
	public function actionDisplaySavedImage()
	{
		$model=$this->loadModel($_GET['id']);
	 
		header('Pragma: public');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Content-Transfer-Encoding: binary');
		header('Content-length: '.$model->fileSize);
		header('Content-Type: '.$model->fileType);
		header('Content-Disposition: attachment; filename='.$model->fileName);
	 
			echo $model->binaryFile;
	}

	public function actionViewSavedImage()
	{
			$model=$this->loadModel($_GET['id']);
			$this->renderPartial('imageview', array(
				'model'=>$model
			));
	}
	    
    /**
    * Saves the name, size, type and data of the uploaded file
    */

    public function beforeSave()
    {
        if($file=CUploadedFile::getInstance($this,'binaryfile'))
        {
            $this->fileName=$file->name;
            $this->fileType=$file->type;
            $this->fileSize=$file->size;
            $this->binaryFile=file_get_contents($file->tempName);
        }

    return parent::beforeSave();
    }

}
