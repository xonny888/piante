<?php

/**
 * This is the model class for table "proprietaPianta".
 *
 * The followings are the available columns in table 'proprietaPianta':
 * @property integer $id
 * @property integer $version
 * @property integer $ll_idPianta
 * @property integer $ll_IdProprieta
 * @property string $t_note
 * @property string $t_valore
 */
class ProprietaPianta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProprietaPianta the static model class
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
		return 'proprietaPianta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ll_idPianta, ll_IdProprieta', 'required'),
			array('version, ll_idPianta, ll_IdProprieta', 'numerical', 'integerOnly'=>true),
			array('t_note, t_valore', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, version, ll_idPianta, ll_IdProprieta, t_note, t_valore', 'safe', 'on'=>'search'),
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
			'proprieta' => array(self::BELONGS_TO, 'Proprieta', 'll_IdProprieta'),
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
			'version' => 'Version',
			'll_idPianta' => 'Ll Id Pianta',
			'll_IdProprieta' => 'Ll Id Proprieta',
			't_note' => 'T Note',
			't_valore' => 'T Valore',
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
		$criteria->compare('ll_idPianta',$this->ll_idPianta);
		$criteria->compare('ll_IdProprieta',$this->ll_IdProprieta);
		$criteria->compare('t_note',$this->t_note,true);
		$criteria->compare('t_valore',$this->t_valore,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
