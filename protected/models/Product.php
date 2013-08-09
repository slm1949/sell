<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $name
 * @property string $model
 * @property integer $category_id
 * @property string $description
 * @property string $image
 * @property string $else
 */
class Product extends CActiveRecord
{
	private $oldAttributes = array();

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, model, category_id', 'required'),
			array('category_id', 'numerical', 'integerOnly'=>true),
			array('name, model, description, image, else', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, model, category_id, description, image, else', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'model' => 'Model',
			'category_id' => 'Category',
			'description' => 'Description',
			'image' => 'Image',
			'else' => 'Else',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('else',$this->else,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	protected function afterSave()
	{
		if(!isset($this->oldAttributes['image']) || $this->image != $this->oldAttributes['image']){
			$filePath = Yii::getPathOfAlias('webroot').'/upload/tmp/'.$this->image;
			$targetPath = Yii::getPathOfAlias('webroot').'/upload/images/product/originals/'.$this->image;

			@ mkdir(Yii::getPathOfAlias('webroot').'/upload/images/product/originals/', 0755, true);
			copy($filePath, $targetPath);

			@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/originals/'.$this->oldAttributes['image']);
			@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/thumb/'.$this->oldAttributes['image']);
			@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/tiny/'.$this->oldAttributes['image']);
			@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/big/'.$this->oldAttributes['image']);
		}
	}

	protected function afterFind()
    {
        $this->oldAttributes = $this->getAttributes();

        return parent::afterFind();
    }

    protected function afterDelete(){
    	@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/originals/'.$this->oldAttributes['image']);
		@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/thumb/'.$this->oldAttributes['image']);
		@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/tiny/'.$this->oldAttributes['image']);
		@ unlink(Yii::getPathOfAlias('webroot').'/upload/images/product/big/'.$this->oldAttributes['image']);
    }
}