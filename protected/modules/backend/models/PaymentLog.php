<?php

/**
 * This is the model class for table "payment_log".
 *
 * The followings are the available columns in table 'payment_log':
 * @property string $id
 * @property string $ref_no
 * @property string $tranx_id
 * @property string $response_code
 * @property string $rc
 * @property double $amount
 * @property string $timestamp
 * @property string $bills_id
 *
 * The followings are the available model relations:
 * @property Bills $bills
 */
class PaymentLog extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'payment_log';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('amount', 'numerical'),
            array('ref_no, tranx_id', 'length', 'max' => 20),
            array('response_code, rc', 'length', 'max' => 5),
            array('timestamp, bills_id', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, ref_no, tranx_id, response_code, rc, amount, timestamp, bills_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'bills' => array(self::BELONGS_TO, 'Bills', 'bills_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'ref_no' => 'Ref No',
            'tranx_id' => 'Tranx',
            'response_code' => 'Response Code',
            'rc' => 'Rc',
            'amount' => 'Amount',
            'timestamp' => 'Timestamp',
            'bills_id' => 'Bills',
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
        $criteria->compare('ref_no', $this->ref_no, true);
        $criteria->compare('tranx_id', $this->tranx_id, true);
        $criteria->compare('response_code', $this->response_code, true);
        $criteria->compare('rc', $this->rc, true);
        $criteria->compare('amount', $this->amount);
        $criteria->compare('timestamp', $this->timestamp, true);
        $criteria->compare('bills_id', $this->bills_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return PaymentLog the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
