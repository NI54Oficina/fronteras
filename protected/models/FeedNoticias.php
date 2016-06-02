<?php

/**
 * This is the model class for table "tbl_feed_noticias".
 *
 * The followings are the available columns in table 'tbl_feed_noticias':
 * @property integer $id
 * @property integer $nid
 * @property string $titulo
 * @property string $fecha
 * @property string $foto
 * @property string $ruta
 * @property string $categoria
 * @property string $bajada
 * @property string $body
 * @property string $fuente
 */
class FeedNoticias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_feed_noticias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nid, titulo, fecha, foto, ruta, categoria, bajada, body, fuente', 'required'),
			array('nid', 'numerical', 'integerOnly'=>true),
			array('categoria, fuente', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nid, titulo, fecha, foto, ruta, categoria, bajada, body, fuente', 'safe', 'on'=>'search'),
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
			'titulo' => 'Titulo',
			'fecha' => 'Fecha',
			'foto' => 'Foto',
			'ruta' => 'Ruta',
			'categoria' => 'Categoria',
			'bajada' => 'Bajada',
			'body' => 'Body',
			'fuente' => 'Fuente',
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
		$criteria->compare('titulo',$this->titulo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('ruta',$this->ruta,true);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('bajada',$this->bajada,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('fuente',$this->fuente,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return FeedNoticias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function GetLast($number=10,$category="all"){
		//$this->model()->find
		$Criteria = new CDbCriteria();
		//$Criteria->condition = "price > 30";
		$Criteria->order = "nid desc";
		$Criteria->limit = $number;
		if($category!="all"){
			$Criteria->condition = "categoria = '".$category."'";
		}
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

		$data = @file_get_contents('http://www.fyo.com/json/noticias',false,$context);
		if($data){
			$array = json_decode($data,true);
			$notas = $array;
			foreach($notas as $nota){
				$Criteria = new CDbCriteria();
				$Criteria->condition = "nid = ".$nota["nid"];
				$auxNota = $this->model()->find($Criteria);
				$notaNew= new FeedNoticias();
				if($auxNota){
					$dtime = DateTime::createFromFormat("d/m/Y - G:i", $nota["publicacion"]);
					$timestamp = $dtime->getTimestamp();
					if($auxNota->fecha==date('Y-m-d H:i:s',$timestamp))
					{
						continue;
					}else{
						$notaNew= $auxNota;
					}
				}
				$newContent=true;
				
				$notaNew["nid"]= $nota["nid"];
				$notaNew["titulo"]= $nota["titulo"];
				$dtime = DateTime::createFromFormat("d/m/Y - G:i", $nota["publicacion"]);
				$timestamp = $dtime->getTimestamp();
				$notaNew["fecha"]= date('Y-m-d H:i:s',$timestamp);
				$notaNew["foto"]= $nota["foto"];
				$notaNew["ruta"]= $nota["ruta"];
				$notaNew["categoria"]= $nota["categoria"];
				$notaNew["bajada"]= $nota["bajada"];
				$notaNew["body"]= $nota["body"];
				$notaNew["fuente"]= $nota["fuente"];
				$notaNew->save();
				
			}
		}
		echo "fin";
		return $newContent;	
	}
}
