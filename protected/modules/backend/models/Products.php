<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id
 * @property string $name
 * @property string $zte_product_code
 * @property double $price
 * @property integer $parent_id
 * @property integer $type_product_id
 *
 * The followings are the available model relations:
 * @property TypeProduct $typeProduct
 * @property Products $parent
 * @property Products[] $products
 * @property User[] $users
 */
class Products extends CActiveRecord {

    const TYPE_FREE = 1;
    const TYPE_SVOD = 2;
    const TYPE_PPV = 3;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'products';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('price', 'numerical'),
            array('name', 'length', 'max' => 255),
            array('zte_product_code', 'length', 'max' => 45),
            array('parent_id, type_product', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name, zte_product_code, price, parent_id, type_product', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'parent' => array(self::BELONGS_TO, 'Products', 'parent_id'),
            'products' => array(self::HAS_MANY, 'Products', 'parent_id'),
            'productDescription' => array(self::HAS_ONE, 'ProductDescription', 'product_id'),
            'users' => array(self::MANY_MANY, 'User', 'user_products(product_id, user_id)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'zte_product_code' => 'Zte Product Code',
            'price' => 'Price',
            'parent_id' => 'Parent',
            'type_product' => 'Type Product',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('zte_product_code', $this->zte_product_code, true);
        $criteria->compare('price', $this->price);
        $criteria->compare('parent_id', $this->parent_id);
        $criteria->compare('type_product', $this->type_product);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Products the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getProductsOptions() {
        if (isset($this->id)) {
            return CHtml::listData(Products::model()->findAll(array("condition" => "id <>  $this->id", "order" => "id")), 'id', 'name');
        } else {
            return CHtml::listData(Products::model()->findAll(), 'id', 'name');
        }
    }

    public function getTypeProductOptions() {
        return CHtml::listData(TypeProduct::model()->findAll(), 'id', 'name');
    }

    public function getParentName() {
        return ($this->parent_id === NULL) ? 'root' : $this->parent->name;
    }

    public function getTypeOptions() {
        return array(
            self::TYPE_FREE => 'FREE',
            self::TYPE_PPV => 'PPV',
            self::TYPE_SVOD => 'SVOD',
        );
    }

    public function getTypeText($type = null) {
        $value = ($type === null) ? $this->type_product : $type;
        $typeOptions = $this->getTypeOptions();
        return isset($typeOptions[$value]) ?
                $typeOptions[$value] : "unknown type ({$value})";
    }

    public function getTypeValue($type = null) {
        $typeOptions = $this->getTypeOptions();
        return array_search($type, $typeOptions);
    }

}
