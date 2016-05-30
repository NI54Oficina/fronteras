<?php

/**
 * This is the model class for table "tbl_retiro".
 *
 * The followings are the available columns in table 'tbl_retiro':
 * @property integer $id
 * @property string $producto
 * @property string $pais
 * @property string $nombreComercial
 * @property string $retiroCarne
 * @property string $retiroLeche
 */
class Retiro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_retiro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('producto, pais, nombreComercial, retiroCarne, retiroLeche', 'required'),
			array('producto, pais, nombreComercial, retiroCarne', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, producto, pais, nombreComercial, retiroCarne, retiroLeche', 'safe', 'on'=>'search'),
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
			'producto' => 'Producto',
			'pais' => 'Pais',
			'nombreComercial' => 'Nombre Comercial',
			'retiroCarne' => 'Retiro Carne',
			'retiroLeche' => 'Retiro Leche',
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
		$criteria->compare('producto',$this->producto,true);
		$criteria->compare('pais',$this->pais,true);
		$criteria->compare('nombreComercial',$this->nombreComercial,true);
		$criteria->compare('retiroCarne',$this->retiroCarne,true);
		$criteria->compare('retiroLeche',$this->retiroLeche,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Retiro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
