<?php

/**
 * This is the model class for table "liquidacion".
 *
 * The followings are the available columns in table 'liquidacion':
 * @property integer $idLiquidacion
 * @property string $fechaLiquidacion
 * @property integer $sueldoBase
 * @property string $horasTrabajadas
 * @property integer $diasTrabajados
 * @property integer $antesImp
 * @property double $seguroCesantia
 * @property integer $despuesImp
 * @property integer $liquido
 * @property integer $aPagar
 * @property string $estadoLiquidacion
 * @property integer $Empleado_idEmpleado
 *
 * The followings are the available model relations:
 * @property Anticipo[] $anticipos
 * @property BonoHasLiquidacion[] $bonoHasLiquidacions
 * @property Empleado $empleadoIdEmpleado
 */
class Liquidacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'liquidacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaLiquidacion, Empleado_idEmpleado', 'required'),
			array('sueldoBase, diasTrabajados, antesImp, despuesImp, liquido, aPagar, Empleado_idEmpleado', 'numerical', 'integerOnly'=>true),
			array('seguroCesantia', 'numerical'),
			array('estadoLiquidacion', 'length', 'max'=>45),
			array('horasTrabajadas', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idLiquidacion, fechaLiquidacion, sueldoBase, horasTrabajadas, diasTrabajados, antesImp, seguroCesantia, despuesImp, liquido, aPagar, estadoLiquidacion, Empleado_idEmpleado', 'safe', 'on'=>'search'),
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
			'anticipos' => array(self::HAS_MANY, 'Anticipo', 'Liquidacion_idLiquidacion'),
			'bonoHasLiquidacions' => array(self::HAS_MANY, 'BonoHasLiquidacion', 'Liquidacion_idLiquidacion'),
			'empleadoIdEmpleado' => array(self::BELONGS_TO, 'Empleado', 'Empleado_idEmpleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idLiquidacion' => 'Id Liquidacion',
			'fechaLiquidacion' => 'Fecha Liquidacion',
			'sueldoBase' => 'Sueldo Base',
			'horasTrabajadas' => 'Horas Trabajadas',
			'diasTrabajados' => 'Dias Trabajados',
			'antesImp' => 'Antes Imp',
			'seguroCesantia' => 'Seguro Cesantia',
			'despuesImp' => 'Despues Imp',
			'liquido' => 'Liquido',
			'aPagar' => 'A Pagar',
			'estadoLiquidacion' => 'Estado Liquidacion',
			'Empleado_idEmpleado' => 'Empleado Id Empleado',
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

		$criteria->compare('idLiquidacion',$this->idLiquidacion);
		$criteria->compare('fechaLiquidacion',$this->fechaLiquidacion,true);
		$criteria->compare('sueldoBase',$this->sueldoBase);
		$criteria->compare('horasTrabajadas',$this->horasTrabajadas,true);
		$criteria->compare('diasTrabajados',$this->diasTrabajados);
		$criteria->compare('antesImp',$this->antesImp);
		$criteria->compare('seguroCesantia',$this->seguroCesantia);
		$criteria->compare('despuesImp',$this->despuesImp);
		$criteria->compare('liquido',$this->liquido);
		$criteria->compare('aPagar',$this->aPagar);
		$criteria->compare('estadoLiquidacion',$this->estadoLiquidacion,true);
		$criteria->compare('Empleado_idEmpleado',$this->Empleado_idEmpleado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Liquidacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
