<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $birthdate
 * @property string $surename
 * @property string $lastname
 * @property string $status
 * @property integer $role_id
 * @property integer $products_id
 *
 * The followings are the available model relations:
 * @property Bills[] $bills
 * @property Role $role
 * @property Products $products
 * @property AccessLog[] $accessLogs
 */
class User extends CActiveRecord {

    public $repeatpassword;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, birthdate, email, role_id, products_id', 'required'),
            array('password, repeatpassword', 'required', 'on' => 'insert'),
            array('repeatpassword', 'compare', 'compareAttribute' => 'password', 'message' => "Passwords don't match"),
            array('username, password, repeatpassword, email', 'length', 'max' => 255),
            array('surename, lastname, status', 'length', 'max' => 45),
            array('birthdate', 'safe'),
            array('email', 'email'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, username, password, email, birthdate, surename, lastname, status, role_id, products_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'bills' => array(self::HAS_MANY, 'Bills', 'user_id'),
            'role' => array(self::BELONGS_TO, 'Role', 'role_id'),
            'products' => array(self::BELONGS_TO, 'Products', 'products_id'),
            'accessLogs' => array(self::HAS_MANY, 'AccessLog', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'repeatpassword' => 'Retype Password',
            'email' => 'Email',
            'birthdate' => 'Birthdate',
            'surename' => 'Surename',
            'lastname' => 'Lastname',
            'status' => 'Status',
            'role_id' => 'Role',
            'products_id' => 'Products',
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

        $criteria->compare('id', $this->id, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('birthdate', $this->birthdate, true);
        $criteria->compare('surename', $this->surename, true);
        $criteria->compare('lastname', $this->lastname, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('role_id', $this->role_id);
        $criteria->compare('products_id', $this->products_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getRoleOptions() {
        return CHtml::listData(Role::model()->findAll(), 'id', 'name');
    }

    public function getProductsOptions() {
        return CHtml::listData(Products::model()->findAll(), 'id', 'name');
    }

    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->password = sha1($this->password);
        } else {
            $user = User::model()->findByPk($this->id);
            if ($user->password != $this->password) {
                $this->password = sha1($this->password);
            }
        }
        return true;
    }

    public function getOperationsArray() {
        $data = array();
        if (is_object($this->role))
            foreach ($this->role->operations as $operation)
                array_push($data, $operation->name);
        return $data;
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password) {
        return sha1($password) === $this->password;
    }

    public function getRoleName() {
        return ($this->role !== NULL) ? $this->role->name : 'Not Set';
    }

    public function getRoleNameLink() {
        return ($this->role !== NULL) ? CHtml::link(CHtml::encode($model->role->name), array('backend/role/view', 'id' => $model->role_id)) : 'Not Set';
    }
}