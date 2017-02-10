<?php

/**
 * This is the model class for table "tbl_cabanas".
 *
 * The followings are the available columns in table 'tbl_cabanas':
 * @property integer $id
 * @property string $id_cabanias
 * @property string $fecha
 * @property string $provincia
 * @property string $ciudad
 * @property string $consignatario
 * @property string $cabania
 * @property string $zona
 * @property string $raza
 * @property string $cantidad
 * @property string $detalle
 * @property string $tipo_remate
 * @property string $cate_remate
 * @property string $suspendido
 * @property string $id_asociacion_1
 * @property string $id_asociacion_2
 * @property string $id_asociacion_3
 * @property string $id_asociacion_4
 * @property string $id_asociacion_5
 */
class Cabanas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_cabanas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id_cabanias, fecha, provincia, ciudad, consignatario, cabania, zona, raza, cantidad, detalle, tipo_remate, cate_remate, suspendido, id_asociacion_1, id_asociacion_2, id_asociacion_3, id_asociacion_4, id_asociacion_5', 'required'),
			array('id_cabanias, provincia, ciudad, zona, raza, tipo_remate, cate_remate, suspendido, id_asociacion_1, id_asociacion_2, id_asociacion_3, id_asociacion_4, id_asociacion_5', 'length', 'max'=>100),
			array('consignatario, cabania', 'length', 'max'=>150),
			array('cantidad, detalle', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_cabanias, fecha, provincia, ciudad, consignatario, cabania, zona, raza, cantidad, detalle, tipo_remate, cate_remate, suspendido, id_asociacion_1, id_asociacion_2, id_asociacion_3, id_asociacion_4, id_asociacion_5', 'safe', 'on'=>'search'),
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
			'id_cabanias' => 'Id Cabanias',
			'fecha' => 'Fecha',
			'provincia' => 'Provincia',
			'ciudad' => 'Ciudad',
			'consignatario' => 'Consignatario',
			'cabania' => 'Cabania',
			'zona' => 'Zona',
			'raza' => 'Raza',
			'cantidad' => 'Cantidad',
			'detalle' => 'Detalle',
			'tipo_remate' => 'Tipo Remate',
			'cate_remate' => 'Cate Remate',
			'suspendido' => 'Suspendido',
			'id_asociacion_1' => 'Id Asociacion 1',
			'id_asociacion_2' => 'Id Asociacion 2',
			'id_asociacion_3' => 'Id Asociacion 3',
			'id_asociacion_4' => 'Id Asociacion 4',
			'id_asociacion_5' => 'Id Asociacion 5',
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
		$criteria->compare('id_cabanias',$this->id_cabanias,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('consignatario',$this->consignatario,true);
		$criteria->compare('cabania',$this->cabania,true);
		$criteria->compare('zona',$this->zona,true);
		$criteria->compare('raza',$this->raza,true);
		$criteria->compare('cantidad',$this->cantidad,true);
		$criteria->compare('detalle',$this->detalle,true);
		$criteria->compare('tipo_remate',$this->tipo_remate,true);
		$criteria->compare('cate_remate',$this->cate_remate,true);
		$criteria->compare('suspendido',$this->suspendido,true);
		$criteria->compare('id_asociacion_1',$this->id_asociacion_1,true);
		$criteria->compare('id_asociacion_2',$this->id_asociacion_2,true);
		$criteria->compare('id_asociacion_3',$this->id_asociacion_3,true);
		$criteria->compare('id_asociacion_4',$this->id_asociacion_4,true);
		$criteria->compare('id_asociacion_5',$this->id_asociacion_5,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cabanas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
