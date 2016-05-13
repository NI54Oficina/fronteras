<?php

/**
 * This is the model class for table "tbl_veterinarias".
 *
 * The followings are the available columns in table 'tbl_veterinarias':
 * @property integer $id
 * @property string $cuenta
 * @property string $provincia
 * @property string $ciudad
 * @property string $direccion
 * @property string $altura
 * @property string $telefono
 * @property string $tipo
 * @property string $subtipo
 * @property string $cond_comercial
 * @property string $grupo
 * @property string $estado
 * @property string $ejecutivo
 * @property string $dueno
 * @property string $cuit
 * @property integer $id_cliente
 * @property string $email
 */
class Veterinarias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_veterinarias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cuenta, provincia, ciudad, direccion, altura, telefono, tipo, subtipo, cond_comercial, grupo, estado, ejecutivo, dueno, cuit, id_cliente, email', 'required'),
			array('id_cliente', 'numerical', 'integerOnly'=>true),
			array('cuenta, direccion, ejecutivo, dueno, cuit', 'length', 'max'=>300),
			array('provincia, altura, tipo, grupo', 'length', 'max'=>100),
			array('ciudad, subtipo', 'length', 'max'=>150),
			array('cond_comercial', 'length', 'max'=>10),
			array('estado', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, cuenta, provincia, ciudad, direccion, altura, telefono, tipo, subtipo, cond_comercial, grupo, estado, ejecutivo, dueno, cuit, id_cliente, email', 'safe', 'on'=>'search'),
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
			'cuenta' => 'Cuenta',
			'provincia' => 'Provincia',
			'ciudad' => 'Ciudad',
			'direccion' => 'Direccion',
			'altura' => 'Altura',
			'telefono' => 'Telefono',
			'tipo' => 'Tipo',
			'subtipo' => 'Subtipo',
			'cond_comercial' => 'Cond Comercial',
			'grupo' => 'Grupo',
			'estado' => 'Estado',
			'ejecutivo' => 'Ejecutivo',
			'dueno' => 'Dueno',
			'cuit' => 'Cuit',
			'id_cliente' => 'Id Cliente',
			'email' => 'Email',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('cuenta',$this->cuenta,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('altura',$this->altura,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('subtipo',$this->subtipo,true);
		$criteria->compare('cond_comercial',$this->cond_comercial,true);
		$criteria->compare('grupo',$this->grupo,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('ejecutivo',$this->ejecutivo,true);
		$criteria->compare('dueno',$this->dueno,true);
		$criteria->compare('cuit',$this->cuit,true);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('email',$this->email,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Veterinarias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
