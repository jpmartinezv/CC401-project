<?php

/**
 * This is the model class for table "alquilercanchapromocion".
 *
 * The followings are the available columns in table 'alquilercanchapromocion':
 * @property integer $idHorario
 * @property integer $idUsuario
 * @property integer $idPromocion
 * @property double $precio
 * @property double $precioPromocion
 * @property double $precioTotal
 *
 * The followings are the available model relations:
 * @property Alquilercancha $idHorario0
 * @property Alquilercancha $idUsuario0
 * @property Promocion $idPromocion0
 */
class Alquilercanchapromocion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'alquilercanchapromocion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idUsuario, idPromocion', 'required'),
			array('idUsuario, idPromocion', 'numerical', 'integerOnly'=>true),
			array('precio, precioPromocion, precioTotal', 'numerical'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idHorario, idUsuario, idPromocion, precio, precioPromocion, precioTotal', 'safe', 'on'=>'search'),
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
			'idHorario0' => array(self::BELONGS_TO, 'Alquilercancha', 'idHorario'),
			'idUsuario0' => array(self::BELONGS_TO, 'Alquilercancha', 'idUsuario'),
			'idPromocion0' => array(self::BELONGS_TO, 'Promocion', 'idPromocion'),
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
			'idPromocion' => 'Id Promocion',
			'precio' => 'Precio',
			'precioPromocion' => 'Precio Promocion',
			'precioTotal' => 'Precio Total',
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
		$criteria->compare('idPromocion',$this->idPromocion);
		$criteria->compare('precio',$this->precio);
		$criteria->compare('precioPromocion',$this->precioPromocion);
		$criteria->compare('precioTotal',$this->precioTotal);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alquilercanchapromocion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
