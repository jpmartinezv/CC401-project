<?php

/**
 * This is the model class for table "local".
 *
 * The followings are the available columns in table 'local':
 * @property integer $idLocal
 * @property string $nombre
 * @property integer $distrito
 * @property string $direccion
 * @property string $telefono
 * @property integer $idUsuario
 *
 * The followings are the available model relations:
 * @property Cancha[] $canchas
 * @property Usuario $idUsuario0
 */
class Local extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'local';
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
			array('distrito, idUsuario', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			array('direccion', 'length', 'max'=>200),
			array('telefono', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idLocal, nombre, distrito, direccion, telefono, idUsuario', 'safe', 'on'=>'search'),
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
			'canchas' => array(self::HAS_MANY, 'Cancha', 'idLocal'),
			'idUsuario0' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idLocal' => 'Id Local',
			'nombre' => 'Nombre',
			'distrito' => 'Distrito',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'idUsuario' => 'Id Usuario',
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

		$criteria->compare('idLocal',$this->idLocal);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('distrito',$this->distrito);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('idUsuario',$this->idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Local the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
