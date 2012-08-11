<?php

/**
 * This is the model class for table "tipologia".
 *
 * The followings are the available columns in table 'tipologia':
 * @property integer $id
 * @property integer $version
 * @property integer $b_Pubblica
 * @property string $t_descrizione
 * @property string $t_Tipologia
 * @property string $t_urlIcona
 */
class Tipologia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tipologia the static model class
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
		return 'tipologia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('t_Tipologia', 'required'),
			array('version, b_Pubblica', 'numerical', 'integerOnly'=>true),
			array('t_descrizione, t_Tipologia, t_urlIcona', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, version, b_Pubblica, t_descrizione, t_Tipologia, t_urlIcona', 'safe', 'on'=>'search'),
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
			'piante' => array(self::HAS_MANY, 'Pianta', 'll_IdTipologia'),
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
			'b_Pubblica' => 'B Pubblica',
			't_descrizione' => 'Descrizione',
			't_Tipologia' => 'Tipologia',
			't_urlIcona' => 'Url Icona',
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
		$criteria->compare('b_Pubblica',$this->b_Pubblica);
		$criteria->compare('t_descrizione',$this->t_descrizione,true);
		$criteria->compare('t_Tipologia',$this->t_Tipologia,true);
		$criteria->compare('t_urlIcona',$this->t_urlIcona,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
