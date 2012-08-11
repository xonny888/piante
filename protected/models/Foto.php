<?php

/**
 * This is the model class for table "foto".
 *
 * The followings are the available columns in table 'foto':
 * @property integer $id
 * @property integer $ll_idPianta
 * @property string $t_didascalia
 * @property string $t_IdFoto
 * @property string $binaryFile
 * @property string $fileName
 * @property string $fileType
 * @property integer $fileSize
 * @property integer $fileWidth
 * @property integer $fileHeight
 */
class Foto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Foto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'foto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('binaryFile', 'file',
				'types'=>'jpg, gif, png, bmp, jpeg, pdf',
				'maxSize'=>1024 * 1024 * 10, // 10MB
                'tooLarge'=>'The file was larger than 10MB. Please upload a smaller file.',
				'allowEmpty' => false
			),
			array('ll_idPianta', 'required'),
			array('ll_idPianta, fileSize, fileWidth, fileHeight', 'numerical', 'integerOnly'=>true),
			array('t_didascalia, t_IdFoto, fileName, fileType', 'length', 'max'=>255),
			array('binaryFile', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ll_idPianta, t_didascalia, t_IdFoto, fileName, fileType, fileSize, fileWidth, fileHeight', 'safe', 'on'=>'search'),
			//array('id, ll_idPianta, t_didascalia, t_IdFoto, binaryFile, fileName, fileType, fileSize, fileWidth, fileHeight', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'pianta' => array(self::BELONGS_TO, 'Pianta', 'll_idPianta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'll_idPianta' => 'Ll Id Pianta',
			't_didascalia' => 'T Didascalia',
			't_IdFoto' => 'T Id Foto',
			'binaryFile' => 'Binary File',
			'fileName' => 'File Name',
			'fileType' => 'File Type',
			'fileSize' => 'File Size',
			'fileWidth' => 'File Width',
			'fileHeight' => 'File Height',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('ll_idPianta',$this->ll_idPianta);
		$criteria->compare('t_didascalia',$this->t_didascalia,true);
		$criteria->compare('t_IdFoto',$this->t_IdFoto,true);
		//$criteria->compare('binaryFile',$this->binaryFile,true);
		$criteria->compare('fileName',$this->fileName,true);
		$criteria->compare('fileType',$this->fileType,true);
		$criteria->compare('fileSize',$this->fileSize);
		$criteria->compare('fileWidth',$this->fileWidth);
		$criteria->compare('fileHeight',$this->fileHeight);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
