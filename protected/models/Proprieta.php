<?php

/**
 * This is the model class for table "proprieta".
 *
 * The followings are the available columns in table 'proprieta':
 * @property integer $id
 * @property integer $version
 * @property integer $b_generale
 * @property integer $n_Ordine
 * @property string $t_dataManagerInput
 * @property string $t_DataManagerInputParam
 * @property string $t_dataManagerOutput
 * @property string $t_DataManagerOutputParam
 * @property string $t_Gruppo
 * @property string $t_Proprieta
 * @property string $t_SottoGruppo
 */
class Proprieta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proprieta the static model class
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
		return 'proprieta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('t_dataManagerInput', 'required'),
			array('version, b_generale, n_Ordine', 'numerical', 'integerOnly'=>true),
			array('t_dataManagerInput, t_DataManagerInputParam, t_dataManagerOutput, t_DataManagerOutputParam, t_Gruppo, t_Proprieta, t_SottoGruppo', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, version, b_generale, n_Ordine, t_dataManagerInput, t_DataManagerInputParam, t_dataManagerOutput, t_DataManagerOutputParam, t_Gruppo, t_Proprieta, t_SottoGruppo', 'safe', 'on'=>'search'),
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
			'proprietaPianta' => array(self::HAS_MANY, 'ProprietaPianta', array('ll_IdProprieta'=>'id')),
			'proprietaTipologia' => array(self::HAS_MANY, 'ProprietaTipologia', array('ll_IdProprieta'=>'id')),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'version' => 'Version',
			'b_generale' => 'B Generale',
			'n_Ordine' => 'N Ordine',
			't_dataManagerInput' => 'T Data Manager Input',
			't_DataManagerInputParam' => 'T Data Manager Input Param',
			't_dataManagerOutput' => 'T Data Manager Output',
			't_DataManagerOutputParam' => 'T Data Manager Output Param',
			't_Gruppo' => 'T Gruppo',
			't_Proprieta' => 'T Proprieta',
			't_SottoGruppo' => 'T Sotto Gruppo',
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
		$criteria->compare('version',$this->version);
		$criteria->compare('b_generale',$this->b_generale);
		$criteria->compare('n_Ordine',$this->n_Ordine);
		$criteria->compare('t_dataManagerInput',$this->t_dataManagerInput,true);
		$criteria->compare('t_DataManagerInputParam',$this->t_DataManagerInputParam,true);
		$criteria->compare('t_dataManagerOutput',$this->t_dataManagerOutput,true);
		$criteria->compare('t_DataManagerOutputParam',$this->t_DataManagerOutputParam,true);
		$criteria->compare('t_Gruppo',$this->t_Gruppo,true);
		$criteria->compare('t_Proprieta',$this->t_Proprieta,true);
		$criteria->compare('t_SottoGruppo',$this->t_SottoGruppo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
