<?php

/**
 * This is the model class for table "tbl_producto".
 *
 * The followings are the available columns in table 'tbl_producto':
 * @property integer $id
 * @property string $nombre
 * @property integer $seccion
 * @property string $target
 * @property string $link
 * @property string $descripcion
 * @property string $fecha
 * @property string $tags
 *
 * The followings are the available model relations:
 * @property Seccion $seccion0
 * @property ProductoContenido[] $productoContenidos
 * @property TagProducto[] $tagProductos
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, seccion, target', 'required'),
			array('seccion', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>150),
			array('target', 'length', 'max'=>10),
			array('link, descripcion', 'length', 'max'=>300),
			array('link, descripcion, fullTags ,fecha, tags,pais,user_id,codeContent', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, seccion, target, link, descripcion, fecha, tags', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'seccion' => 'Seccion',
			'target' => 'Target',
			'link' => 'Link',
			'descripcion' => 'Descripcion',
			'fecha' => 'Fecha',
			'tags' => 'Tags',
			'fullTags' => 'FullTags',
			'pais' => 'Pais',
			'codeContent' => 'codeContent',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('seccion',$this->seccion);
		$criteria->compare('target',$this->target,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('fullTags',$this->fullTags,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	function behaviors() {
		return array(
			'tags' => array(
				'class' => 'ext.behaviors.model.taggable.ETaggableBehavior',
				// Table where tags are stored
				'tagTable' => 'tbl_tag',
				// Cross-table that stores tag-model connections.
				// By default it's your_model_tableTag
				'tagBindingTable' => 'tbl_tag_producto',
				// Foreign key in cross-table.
				// By default it's your_model_tableId
				'modelTableFk' => 'producto_id',
				// Tag table PK field
				'tagTablePk' => 'id',
				// Tag name field
				'tagTableName' => 'name',
				// Tag counter field
				// if null (default) does not write tag counts to DB
				'tagTableCount' => 'count',
				// Tag binding table tag ID
				'tagBindingTableTagId' => 'tag_id',
				// Caching component ID. If false don't use cache.
				// Defaults to false.
				'cacheID' => 'cache',
	 
				// Save nonexisting tags.
				// When false, throws exception when saving nonexisting tag.
				'createTagsAutomatically' => true,
	 
				// Default tag selection criteria
				'scope' => array(
					'condition' => ' t.user_id = :user_id ',
					'params' => array( ':user_id' => 0 ),
				),
	 
				// Values to insert to tag table on adding tag
				'insertValues' => array(
					'user_id' => 0,
				),
			)
		);
	}
	
	public function beforeDelete(){
		$id= $this->id;
		$contenidos = ProductoContenido::model()->findAll(array("condition"=>"producto_id = $id"));
		foreach($contenidos as $contenido){
			$contenido->delete();
		}
		$this->removeAllTags()->save();
		$imagenes = Imagen::model()->findAll(array("condition"=>"producto_id = $id"));
		foreach($imagenes as $imagen){
			$imagen->delete();
		}
		
		return parent::beforeDelete();
	}
}
