<?php

/**
 * This is the model class for table "proprietaTipologia".
 *
 * The followings are the available columns in table 'proprietaTipologia':
 * @property integer $id
 * @property integer $version
 * @property integer $ll_IdProprieta
 * @property integer $ll_IdTipologia
 */
class ProprietaTipologia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProprietaTipologia the static model class
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
		return 'proprietaTipologia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ll_IdProprieta, ll_IdTipologia', 'required'),
			array('version, ll_IdProprieta, ll_IdTipologia', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, version, ll_IdProprieta, ll_IdTipologia', 'safe', 'on'=>'search'),
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
			'tipologia' => array(self::BELONGS_TO, 'Tipologia', 'll_IdTipologia'),
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
			'll_IdProprieta' => 'Ll Id Proprieta',
			'll_IdTipologia' => 'Ll Id Tipologia',
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
		$criteria->compare('ll_IdProprieta',$this->ll_IdProprieta);
		$criteria->compare('ll_IdTipologia',$this->ll_IdTipologia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
