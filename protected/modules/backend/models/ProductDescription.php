<?php

/**
 * This is the model class for table "product_description".
 *
 * The followings are the available columns in table 'product_description':
 * @property integer $product_id
 * @property string $title
 * @property string $description
 * @property string $director
 * @property string $actors
 * @property string $genre
 * @property string $writer
 * @property string $author
 * @property string $slug
 * @property string $created
 * @property string $updated
 *
 * The followings are the available model relations:
 * @property Products $product
 */
class ProductDescription extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'product_description';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title', 'required'),
            array('title, director, genre, writer, author, slug', 'length', 'max' => 255),
            array('description, actors, created, updated', 'safe'),
//            array('created', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'insert'),
//            array('updated', 'default', 'value' => new CDbExpression('NULL'), 'setOnEmpty' => false, 'on' => 'insert'),
//            array('updated', 'default', 'value' => new CDbExpression('NOW()'), 'setOnEmpty' => false, 'on' => 'update'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('product_id, title, description, director, actors, genre, writer, author, slug, created, updated', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'product' => array(self::BELONGS_TO, 'Products', 'product_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'product_id' => 'Product',
            'title' => 'Title',
            'description' => 'Description',
            'director' => 'Director',
            'actors' => 'Actors',
            'genre' => 'Genre',
            'writer' => 'Writer',
            'author' => 'Author',
            'slug' => 'Slug',
            'created' => 'Created',
            'updated' => 'Updated',
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

        $criteria->compare('product_id', $this->product_id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('director', $this->director, true);
        $criteria->compare('actors', $this->actors, true);
        $criteria->compare('genre', $this->genre, true);
        $criteria->compare('writer', $this->writer, true);
        $criteria->compare('author', $this->author, true);
        $criteria->compare('slug', $this->slug, true);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('updated', $this->updated, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return ProductDescription the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function behaviors() {
        return array(
            'sluggable' => array(
                'class' => 'ext.behaviors.SluggableBehavior.SluggableBehavior',
                'columns' => array('title'),
                'unique' => true,
                'update' => true,
            ),
            'timestamps' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created',
                'updateAttribute' => 'updated',
                'timestampExpression' => new CDbExpression('NOW()'),
                'setUpdateOnCreate' => true,
            ),
        );
    }

}
