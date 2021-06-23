<?php

/**
 * This is the model class for table "contrato".
 *
 * The followings are the available columns in table 'contrato':
 * @property integer $idContrato
 * @property string $inicioContrato
 * @property string $terminoContrato
 * @property integer $sueldoBase
 * @property string $descripcion
 * @property integer $Empleado_idEmpleado
 */
class Contrato extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contrato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('inicioContrato, terminoContrato, sueldoBase, descripcion, Empleado_idEmpleado', 'required'),
			array('sueldoBase, Empleado_idEmpleado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idContrato, inicioContrato, terminoContrato, sueldoBase, descripcion, Empleado_idEmpleado', 'safe', 'on'=>'search'),
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
			'idContrato' => 'Id Contrato',
			'inicioContrato' => 'Inicio Contrato',
			'terminoContrato' => 'Termino Contrato',
			'sueldoBase' => 'Sueldo Base',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idContrato',$this->idContrato);
		$criteria->compare('inicioContrato',$this->inicioContrato,true);
		$criteria->compare('terminoContrato',$this->terminoContrato,true);
		$criteria->compare('sueldoBase',$this->sueldoBase);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('Empleado_idEmpleado',$this->Empleado_idEmpleado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contrato the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
