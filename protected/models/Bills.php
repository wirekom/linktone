<?php

/**
 * This is the model class for table "bills".
 *
 * The followings are the available columns in table 'bills':
 * @property string $id
 * @property double $amount
 * @property string $invoice_no
 * @property string $date_produced
 * @property string $due_date
 * @property string $payment_time
 * @property integer $payment_methods_id
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property PaymentLog[] $paymentLogs
 * @property PaymentMethods $paymentMethods
 * @property User $user
 */
class Bills extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'bills';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('date_produced, due_date, payment_time', 'required'),
            array('amount', 'numerical'),
            array('invoice_no', 'length', 'max' => 45),
            array('date_produced, due_date, payment_time, payment_methods_id, user_id', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, amount, invoice_no, date_produced, due_date, payment_time, payment_methods_id, user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'paymentLogs' => array(self::HAS_MANY, 'PaymentLog', 'bills_id'),
            'paymentMethods' => array(self::BELONGS_TO, 'PaymentMethods', 'payment_methods_id'),
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'amount' => 'Amount',
            'invoice_no' => 'Invoice No',
            'date_produced' => 'Date Produced',
            'due_date' => 'Due Date',
            'payment_time' => 'Payment Time',
            'payment_methods_id' => 'Payment Methods',
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
        $criteria->compare('amount', $this->amount);
        $criteria->compare('invoice_no', $this->invoice_no, true);
        $criteria->compare('date_produced', $this->date_produced, true);
        $criteria->compare('due_date', $this->due_date, true);
        $criteria->compare('payment_time', $this->payment_time, true);
        $criteria->compare('payment_methods_id', $this->payment_methods_id);
        $criteria->compare('user_id', $this->user_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Bills the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function getUserOptions() {
        return CHtml::listData(User::model()->findAll(), 'id', 'username');
    }
    
    public function getPaymentMethodsOptions() {
        return CHtml::listData(PaymentMethods::model()->findAll(), 'id', 'payment_name');
    }

}
