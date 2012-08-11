<?php

/**
 * This is the model class for table "pianta".
 *
 * The followings are the available columns in table 'pianta':
 * @property integer $id
 * @property integer $version
 * @property integer $b_Pubblica
 * @property string $d_Inserimento
 * @property integer $ll_idPiantaPrecedente
 * @property integer $ll_IdTipologia
 * @property integer $n_codOldDB
 * @property string $t_Famiglia
 * @property string $t_GiudizioRiassuntivo
 * @property string $t_ListaSinonimi
 * @property string $t_nomePianta
 * @property string $t_nomeScientificoPianta
 * @property string $t_nomiPianta
 * @property string $t_Note
 * @property string $t_NoteInterne
 */
class Pianta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pianta the static model class
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
		return 'pianta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('t_nomeScientificoPianta, t_Famiglia', 'required'),
			array('version, b_Pubblica, ll_idPiantaPrecedente, ll_IdTipologia, n_codOldDB', 'numerical', 'integerOnly'=>true),
			array('t_Famiglia, t_GiudizioRiassuntivo, t_ListaSinonimi, t_nomePianta, t_nomeScientificoPianta, t_nomiPianta, t_Note, t_NoteInterne', 'length', 'max'=>255),
			array('d_Inserimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ll_IdTipologia,  t_Famiglia, t_GiudizioRiassuntivo, t_ListaSinonimi, t_nomePianta, t_nomeScientificoPianta, t_nomiPianta, t_Note, t_NoteInterne', 'safe', 'on'=>'search'),
			//array('id, version, b_Pubblica, d_Inserimento, ll_idPiantaPrecedente, ll_IdTipologia, n_codOldDB, t_Famiglia, t_GiudizioRiassuntivo, t_ListaSinonimi, t_nomePianta, t_nomeScientificoPianta, t_nomiPianta, t_Note, t_NoteInterne', 'safe', 'on'=>'search'),
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
			'tipologia' => array(self::BELONGS_TO, 'Tipologia', 'll_IdTipologia'),
			'fotografie' => array(self::HAS_MANY, 'Foto', array('ll_idPianta'=>'id')),
			'proprietaPianta' => array(self::HAS_MANY, 'ProprietaPianta', array('ll_idPianta'=>'id')),
			//'proprietas'=>array(self::MANY_MANY, 'Proprieta', 'proprietaPianta(ll_idPianta, ll_IdProprieta)'),
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
			'd_Inserimento' => 'D Inserimento',
			'll_idPiantaPrecedente' => 'Ll Id Pianta Precedente',
			'll_IdTipologia' => 'Tipologia',
			'n_codOldDB' => 'N Cod Old Db',
			't_Famiglia' => 'Famiglia',
			't_GiudizioRiassuntivo' => 'Giudizio Riassuntivo',
			't_ListaSinonimi' => 'Lista Sinonimi',
			't_nomePianta' => 'Nome Pianta',
			't_nomeScientificoPianta' => 'Nome Scientifico Pianta',
			't_nomiPianta' => 'Nomi Pianta',
			't_Note' => 'Note',
			't_NoteInterne' => 'Note Interne',
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
		//$criteria->compare('version',$this->version);
		//$criteria->compare('b_Pubblica',$this->b_Pubblica);
		//$criteria->compare('d_Inserimento',$this->d_Inserimento,true);
		//$criteria->compare('ll_idPiantaPrecedente',$this->ll_idPiantaPrecedente);
		$criteria->compare('ll_IdTipologia',$this->ll_IdTipologia);
		//$criteria->compare('n_codOldDB',$this->n_codOldDB);
		$criteria->compare('t_Famiglia',$this->t_Famiglia,true);
		$criteria->compare('t_GiudizioRiassuntivo',$this->t_GiudizioRiassuntivo,true);
		$criteria->compare('t_ListaSinonimi',$this->t_ListaSinonimi,true);
		$criteria->compare('t_nomePianta',$this->t_nomePianta,true);
		$criteria->compare('t_nomeScientificoPianta',$this->t_nomeScientificoPianta,true);
		$criteria->compare('t_nomiPianta',$this->t_nomiPianta,true);
		$criteria->compare('t_Note',$this->t_Note,true);
		$criteria->compare('t_NoteInterne',$this->t_NoteInterne,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
