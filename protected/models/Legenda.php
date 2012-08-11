<?php

/**
 * This is the model class for table "legenda".
 *
 * The followings are the available columns in table 'legenda':
 * @property integer $id
 * @property integer $version
 * @property string $t_chiave
 * @property string $t_descrizione
 * @property string $t_listaIdTipologie
 * @property string $t_sigla
 */
class Legenda extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Legenda the static model class
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
		return 'legenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('version', 'numerical', 'integerOnly'=>true),
			array('t_chiave, t_descrizione, t_listaIdTipologie, t_sigla', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, version, t_chiave, t_descrizione, t_listaIdTipologie, t_sigla', 'safe', 'on'=>'search'),
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
			't_chiave' => 'T Chiave',
			't_descrizione' => 'T Descrizione',
			't_listaIdTipologie' => 'T Lista Id Tipologie',
			't_sigla' => 'T Sigla',
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
		$criteria->compare('t_chiave',$this->t_chiave,true);
		$criteria->compare('t_descrizione',$this->t_descrizione,true);
		$criteria->compare('t_listaIdTipologie',$this->t_listaIdTipologie,true);
		$criteria->compare('t_sigla',$this->t_sigla,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}