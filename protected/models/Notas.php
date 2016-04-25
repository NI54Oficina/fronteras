<?php

/**
 * This is the model class for table "tbl_notas".
 *
 * The followings are the available columns in table 'tbl_notas':
 * @property integer $id
 * @property string $fecha
 * @property string $titulo
 * @property string $bajada
 * @property string $extra
 * @property string $texto
 * @property string $seccion
 * @property string $pais
 */
class Notas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_notas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, titulo, texto, seccion, pais', 'required'),
			array('titulo', 'length', 'max'=>300),
			array('seccion', 'length', 'max'=>50),
			array('pais', 'length', 'max'=>4),
			array('bajada, extra,', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, titulo, bajada, extra, texto, seccion, pais', 'safe', 'on'=>'search'),
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
			'fecha' => 'Fecha',
			'titulo' => 'Titulo',
			'bajada' => 'Bajada',
			'extra' => 'Extra',
			'texto' => 'Texto',
			'seccion' => 'Seccion',
			'pais' => 'Pais',
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
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('bajada',$this->bajada,true);
		$criteria->compare('extra',$this->extra,true);
		$criteria->compare('texto',$this->texto,true);
		$criteria->compare('seccion',$this->seccion,true);
		$criteria->compare('pais',$this->pais,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Notas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
