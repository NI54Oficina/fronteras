<?php

/**
 * This is the model class for table "tbl_textos".
 *
 * The followings are the available columns in table 'tbl_textos':
 * @property integer $id
 * @property string $esp
 * @property string $eng
 * @property string $por
 */
class Textos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_textos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('es, en, pt', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, es, en, pt', 'safe', 'on'=>'search'),
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
			'es' => 'Es',
			'en' => 'En',
			'pt' => 'Pt',
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
		$criteria->compare('es',$this->es,true);
		$criteria->compare('en',$this->en,true);
		$criteria->compare('pt',$this->pt,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Textos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function GetText($id,$lang=""){
		$language="";
		if($lang!=""){
			$language=$lang;
		}else if(!isset($_SESSION["lng"])||$_SESSION["lng"]==""){
			//$_SESSION["lng"]="español";
			//$_SESSION["pais"]=1;
		}else{
			$language= $_SESSION["lng"];
		}
		
		$model=$this->findByPk($id);
		$auxTran= $model[$language];
		if($auxTran==""){
			foreach($model as $m){
				if($m!=""&&!is_numeric($m)){
					return $m;
				}
			}
		}else{
			return  $auxTran;
		}
	}
}
