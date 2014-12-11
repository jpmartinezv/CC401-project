<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $idUsuario
 * @property string $nombre
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property string $sexo
 * @property string $dni
 * @property string $direccion
 * @property integer $distrito
 * @property string $correo
 * @property string $clave
 * @property string $fechaNacimiento
 * @property string $celular
 * @property integer $tipo
 * @property integer $estado
 *
 * The followings are the available model relations:
 * @property Horariocancha[] $horariocanchas
 * @property Local[] $locals
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellidoPaterno, apellidoMaterno, sexo, dni', 'required'),
			array('distrito, tipo, estado', 'numerical', 'integerOnly'=>true),
			array('nombre, apellidoPaterno, apellidoMaterno, correo', 'length', 'max'=>100),
			array('sexo', 'length', 'max'=>1),
			array('dni', 'length', 'max'=>8),
			array('direccion', 'length', 'max'=>200),
			array('clave', 'length', 'max'=>20),
			array('celular', 'length', 'max'=>10),
			array('fechaNacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuario, nombre, apellidoPaterno, apellidoMaterno, sexo, dni, direccion, distrito, correo, clave, fechaNacimiento, celular, tipo, estado', 'safe', 'on'=>'search'),
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
			'horariocanchas' => array(self::MANY_MANY, 'Horariocancha', 'alquilercancha(idUsuario, idHorario)'),
			'locals' => array(self::HAS_MANY, 'Local', 'idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'nombre' => 'Nombre',
			'apellidoPaterno' => 'Apellido Paterno',
			'apellidoMaterno' => 'Apellido Materno',
			'sexo' => 'Sexo',
			'dni' => 'Dni',
			'direccion' => 'Direccion',
			'distrito' => 'Distrito',
			'correo' => 'Correo',
			'clave' => 'Clave',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'celular' => 'Celular',
			'tipo' => 'Tipo',
			'estado' => 'Estado',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellidoPaterno',$this->apellidoPaterno,true);
		$criteria->compare('apellidoMaterno',$this->apellidoMaterno,true);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('distrito',$this->distrito);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('estado',$this->estado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
