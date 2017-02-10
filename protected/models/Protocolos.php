<?php

/**
 * This is the model class for table "tbl_protocolos".
 *
 * The followings are the available columns in table 'tbl_protocolos':
 * @property integer $id
 * @property string $protocolo
 * @property string $dias
 * @property string $categorias
 * @property string $dias0
 * @property string $dias6
 * @property string $dias7
 * @property string $dias8
 * @property string $dias9
 * @property string $dias10
 */
class Protocolos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_protocolos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('protocolo, dias, categorias, dias0, dias6, dias7, dias8, dias9, dias10', 'required'),
			array('protocolo, dias, categorias, dias0, dias6, dias7, dias8, dias9, dias10', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, protocolo, dias, categorias, dias0, dias6, dias7, dias8, dias9, dias10', 'safe', 'on'=>'search'),
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
			'protocolo' => 'Protocolo',
			'dias' => 'Dias',
			'categorias' => 'Categorias',
			'dias0' => 'Dias0',
			'dias6' => 'Dias6',
			'dias7' => 'Dias7',
			'dias8' => 'Dias8',
			'dias9' => 'Dias9',
			'dias10' => 'Dias10',
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
		$criteria->compare('protocolo',$this->protocolo,true);
		$criteria->compare('dias',$this->dias,true);
		$criteria->compare('categorias',$this->categorias,true);
		$criteria->compare('dias0',$this->dias0,true);
		$criteria->compare('dias6',$this->dias6,true);
		$criteria->compare('dias7',$this->dias7,true);
		$criteria->compare('dias8',$this->dias8,true);
		$criteria->compare('dias9',$this->dias9,true);
		$criteria->compare('dias10',$this->dias10,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Protocolos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
