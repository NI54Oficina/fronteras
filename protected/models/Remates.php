<?php

/**
 * This is the model class for table "tbl_remates".
 *
 * The followings are the available columns in table 'tbl_remates':
 * @property integer $id
 * @property string $modalidad
 * @property string $consignatario
 * @property string $lugar
 * @property integer $provincia
 * @property integer $cabezas
 * @property string $fecha
 * @property string $categoria
 */
class Remates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_remates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('modalidad, consignatario, lugar, provincia, cabezas, fecha, categoria', 'required'),
			array('provincia, cabezas', 'numerical', 'integerOnly'=>true),
			array('modalidad, categoria', 'length', 'max'=>100),
			array('consignatario, lugar', 'length', 'max'=>140),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, modalidad, consignatario, lugar, provincia, cabezas, fecha, categoria', 'safe', 'on'=>'search'),
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
			'modalidad' => 'Modalidad',
			'consignatario' => 'Consignatario',
			'lugar' => 'Lugar',
			'provincia' => 'Provincia',
			'cabezas' => 'Cabezas',
			'fecha' => 'Fecha',
			'categoria' => 'Categoria',
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
		$criteria->compare('modalidad',$this->modalidad,true);
		$criteria->compare('consignatario',$this->consignatario,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('provincia',$this->provincia);
		$criteria->compare('cabezas',$this->cabezas);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('categoria',$this->categoria,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Remates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
