<?php

/**
 * This is the model class for table "alquilercancha".
 *
 * The followings are the available columns in table 'alquilercancha':
 * @property integer $idHorario
 * @property integer $idUsuario
 * @property string $fecha
 * @property string $horaInicio
 * @property string $horaFin
 *
 * The followings are the available model relations:
 * @property Alquilercanchapromocion[] $alquilercanchapromocions
 * @property Alquilercanchapromocion[] $alquilercanchapromocions1
 */
class Alquilercancha extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alquilercancha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario', 'required'),
			array('idUsuario', 'numerical', 'integerOnly'=>true),
			array('fecha, horaInicio, horaFin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idHorario, idUsuario, fecha, horaInicio, horaFin', 'safe', 'on'=>'search'),
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
			'alquilercanchapromocions' => array(self::HAS_MANY, 'Alquilercanchapromocion', 'idHorario'),
			'alquilercanchapromocions1' => array(self::HAS_MANY, 'Alquilercanchapromocion', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idHorario' => 'Id Horario',
			'idUsuario' => 'Id Usuario',
			'fecha' => 'Fecha',
			'horaInicio' => 'Hora Inicio',
			'horaFin' => 'Hora Fin',
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

		$criteria->compare('idHorario',$this->idHorario);
		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('horaInicio',$this->horaInicio,true);
		$criteria->compare('horaFin',$this->horaFin,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alquilercancha the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
