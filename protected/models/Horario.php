<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property integer $idHorario
 * @property integer $Empleado_idEmpleado
 * @property integer $Turnos_idTurnos
 * @property string $fechaInicio
 * @property string $fechaTermino
 *
 * The followings are the available model relations:
 * @property Diaslibres[] $diaslibres
 * @property Empleado $empleadoIdEmpleado
 * @property Turnos $turnosIdTurnos
 */
class Horario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Empleado_idEmpleado, Turnos_idTurnos, fechaInicio, fechaTermino', 'required'),
			array('Empleado_idEmpleado, Turnos_idTurnos', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idHorario, Empleado_idEmpleado, Turnos_idTurnos, fechaInicio, fechaTermino', 'safe', 'on'=>'search'),
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
			'diaslibres' => array(self::HAS_MANY, 'Diaslibres', 'Horario_idHorario'),
			'empleadoIdEmpleado' => array(self::BELONGS_TO, 'Empleado', 'Empleado_idEmpleado'),
			'turnosIdTurnos' => array(self::BELONGS_TO, 'Turnos', 'Turnos_idTurnos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idHorario' => 'Id Horario',
			'Empleado_idEmpleado' => 'Empleado Id Empleado',
			'Turnos_idTurnos' => 'Turnos Id Turnos',
			'fechaInicio' => 'Fecha Inicio',
			'fechaTermino' => 'Fecha Termino',
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

		$criteria->compare('idHorario',$this->idHorario);
		$criteria->compare('Empleado_idEmpleado',$this->Empleado_idEmpleado);
		$criteria->compare('Turnos_idTurnos',$this->Turnos_idTurnos);
		$criteria->compare('fechaInicio',$this->fechaInicio,true);
		$criteria->compare('fechaTermino',$this->fechaTermino,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
