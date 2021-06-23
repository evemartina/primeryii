<?php

/**
 * This is the model class for table "anticipo".
 *
 * The followings are the available columns in table 'anticipo':
 * @property integer $idAnticipo
 * @property integer $montoAnticipo
 * @property string $fechaSolicitud
 * @property string $fechaResolucion
 * @property string $estadoAnticipo
 * @property integer $Liquidacion_idLiquidacion
 *
 * The followings are the available model relations:
 * @property Liquidacion $liquidacionIdLiquidacion
 */
class Anticipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anticipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('montoAnticipo, fechaSolicitud, estadoAnticipo, Liquidacion_idLiquidacion', 'required'),
			array('montoAnticipo, Liquidacion_idLiquidacion', 'numerical', 'integerOnly'=>true),
			array('estadoAnticipo', 'length', 'max'=>45),
			array('fechaResolucion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAnticipo, montoAnticipo, fechaSolicitud, fechaResolucion, estadoAnticipo, Liquidacion_idLiquidacion', 'safe', 'on'=>'search'),
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
			'liquidacionIdLiquidacion' => array(self::BELONGS_TO, 'Liquidacion', 'Liquidacion_idLiquidacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAnticipo' => 'Id Anticipo',
			'montoAnticipo' => 'Monto Anticipo',
			'fechaSolicitud' => 'Fecha Solicitud',
			'fechaResolucion' => 'Fecha Resolucion',
			'estadoAnticipo' => 'Estado Anticipo',
			'Liquidacion_idLiquidacion' => 'Liquidacion Id Liquidacion',
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

		$criteria->compare('idAnticipo',$this->idAnticipo);
		$criteria->compare('montoAnticipo',$this->montoAnticipo);
		$criteria->compare('fechaSolicitud',$this->fechaSolicitud,true);
		$criteria->compare('fechaResolucion',$this->fechaResolucion,true);
		$criteria->compare('estadoAnticipo',$this->estadoAnticipo,true);
		$criteria->compare('Liquidacion_idLiquidacion',$this->Liquidacion_idLiquidacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anticipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
