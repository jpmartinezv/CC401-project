<?php

/**
 * This is the model class for table "cancha".
 *
 * The followings are the available columns in table 'cancha':
 * @property integer $idCancha
 * @property string $nombre
 * @property double $tarifaD
 * @property double $tarifaN
 * @property integer $idLocal
 *
 * The followings are the available model relations:
 * @property Local $idLocal0
 * @property Horariocancha[] $horariocanchas
 */
class Cancha extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cancha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLocal', 'required'),
			array('idLocal', 'numerical', 'integerOnly'=>true),
			array('tarifaD, tarifaN', 'numerical'),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idCancha, nombre, tarifaD, tarifaN, idLocal', 'safe', 'on'=>'search'),
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
			'idLocal0' => array(self::BELONGS_TO, 'Local', 'idLocal'),
			'horariocanchas' => array(self::HAS_MANY, 'Horariocancha', 'idCancha'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCancha' => 'Id Cancha',
			'nombre' => 'Nombre',
			'tarifaD' => 'Tarifa D',
			'tarifaN' => 'Tarifa N',
			'idLocal' => 'Id Local',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idCancha',$this->idCancha);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tarifaD',$this->tarifaD);
		$criteria->compare('tarifaN',$this->tarifaN);
		$criteria->compare('idLocal',$this->idLocal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cancha the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
