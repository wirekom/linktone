<?php

/**
 * This is the model class for table "role".
 *
 * The followings are the available columns in table 'role':
 * @property integer $id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property Operation[] $operations
 * @property User[] $users
 */
class Role extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'role';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'operations' => array(self::MANY_MANY, 'Operation', 'role_access(role_id, operation_id)'),
            'users' => array(self::HAS_MANY, 'User', 'role_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
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

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Role the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getOperationOptions() {
        return CHtml::listData(Operation::model()->findAll(), 'id', 'name');
    }

    public function getOperationsFormat() {
        $data = '<ul>' . PHP_EOL;
        foreach ($this->operations as $operation)
            $data .= '<li>' . $operation->name . '</li>' . PHP_EOL;
        $data .= '</ul>' . PHP_EOL;
        return $data;
    }

    public function getOperationsValue() {
        $content = array();
        foreach ($this->operations as $operation) {
            if ($operation instanceof Operation) {
                array_push($content, $operation->id);
            }
        }
        return $content;
    }

    public static function checkAccess($operation) {
        if (Yii::app()->user->isGuest) {
            Yii::app()->controller->redirect(Yii::app()->createUrl('site/login'));
        } else {
            $user = User::model()->findByPk(Yii::app()->user->id);
            if (!in_array($operation, $user->operationsArray))
                throw new CHttpException(403, "Damn You!, you are not authorized to perform this action.");
        }
    }

    public static function getOperationName() {
        $module = (Yii::app()->controller->module !== NULL) ? Yii::app()->controller->module->id . '.' : '';
        return $module .= Yii::app()->controller->id . '.' . Yii::app()->controller->action->id;
    }

}
