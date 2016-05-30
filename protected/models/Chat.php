<?php

/**
 * This is the model class for table "tbl_chat".
 *
 * The followings are the available columns in table 'tbl_chat':
 * @property integer $id
 * @property string $fecha
 * @property string $nombre
 * @property string $mail
 * @property string $motivo
 * @property integer $abierto
 */
class Chat extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_chat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, nombre, mail, motivo, abierto', 'required'),
			array('abierto', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>130),
			array('mail', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha, nombre, mail, motivo, abierto', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'mail' => 'Mail',
			'motivo' => 'Motivo',
			'abierto' => 'Abierto',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('mail',$this->mail,true);
		$criteria->compare('motivo',$this->motivo,true);
		$criteria->compare('abierto',$this->abierto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Chat the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function chatList($since=0){
		$Criteria = new CDbCriteria();
		$Criteria->select = "id";
		$Criteria->condition = "id > $since";
		$auxNotas = $this->model()->findAll($Criteria);
		$toEcho="";
		if($auxNotas&&count($auxNotas)>0){
			
			foreach($auxNotas as $chat){
				if($toEcho!=""){
					$toEcho.=",";
				}
				$toEcho.=$chat->id;
			}
		}
		echo $toEcho;
	}
}
