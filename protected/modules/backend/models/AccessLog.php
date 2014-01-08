<?php

/**
 * This is the model class for table "access_log".
 *
 * The followings are the available columns in table 'access_log':
 * @property string $id
 * @property string $terminal_type
 * @property string $access_type
 * @property string $status_message
 * @property integer $result
 * @property string $timestamp
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property User $user
 */
class AccessLog extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'access_log';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('result', 'numerical', 'integerOnly' => true),
            array('terminal_type, access_type, status_message', 'length', 'max' => 45),
            array('timestamp, user_id', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, terminal_type, access_type, status_message, result, timestamp, user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'terminal_type' => 'Terminal Type',
            'access_type' => 'Access Type',
            'status_message' => 'Status Message',
            'result' => 'Result',
            'timestamp' => 'Timestamp',
            'user_id' => 'User',
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
        $criteria->compare('terminal_type', $this->terminal_type, true);
        $criteria->compare('access_type', $this->access_type, true);
        $criteria->compare('status_message', $this->status_message, true);
        $criteria->compare('result', $this->result);
        $criteria->compare('timestamp', $this->timestamp, true);
        $criteria->compare('user_id', $this->user_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return AccessLog the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
