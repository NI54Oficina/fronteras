<?php

/**
 * This is the model class for table "tbl_clima_mapas".
 *
 * The followings are the available columns in table 'tbl_clima_mapas':
 * @property integer $id
 * @property integer $nid
 * @property string $content
 */
class ClimaMapas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_clima_mapas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nid, content', 'required'),
			array('nid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nid, content', 'safe', 'on'=>'search'),
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
			'nid' => 'Nid',
			'content' => 'Content',
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
		$criteria->compare('nid',$this->nid);
		$criteria->compare('content',$this->content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ClimaMapas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function GetLast($number=1){
		//$this->model()->find
		$Criteria = new CDbCriteria();
		//$Criteria->condition = "price > 30";
		$Criteria->order = "nid desc";
		$Criteria->limit = $number;
		
		$notas = $this->model()->findAll($Criteria);
		return $notas;
	}
	
	public function CheckFeed(){
		$newContent=false;
		$options = array(
		  'http'=>array(
			'method'=>"GET",
			'header'=>"FYO-AUTH:RllPUG9ydGFsLEZZT1BvcnRhbA=="
		  )
		);
		$context=stream_context_create($options);

		$data = @file_get_contents('http://www.fyo.com/clima/views/vista_temperaturas',false,$context);
		if($data){
			$array = json_decode($data,true);
			$notas = $array;
			foreach($notas as $nota){
				$Criteria = new CDbCriteria();
				$Criteria->condition = "nid = ".$nota["nid"];
				$auxNota = $this->model()->find($Criteria);
				
				if($auxNota){
					continue;
				}
				$notaNew= new ClimaMapas();
				$newContent=true;
				
				$notaNew["nid"]= $nota["nid"];
				$notaNew["content"]= json_encode($nota);
				$notaNew->save();
			
			}
		}
		echo "termina mapa<br>";
		return $newContent;	
	}
}
