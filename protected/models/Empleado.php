<?php

/**
 * This is the model class for table "empleado".
 *
 * The followings are the available columns in table 'empleado':
 * @property integer $idEmpleado
 * @property string $rut
 * @property string $contrasena
 * @property string $nombres
 * @property string $apellidos
 * @property string $estadoEmpleado
 * @property integer $AreaTrabajo_idAreaTrabajo
 * @property integer $Privilegio_idPrivilegio
 * @property integer $AFP_idAFP
 * @property integer $Salud_idSalud
 * @property integer $Contrato_idContrato
 *
 * The followings are the available model relations:
 * @property Asistencia[] $asistencias
 * @property Afp $aFPIdAFP
 * @property Areatrabajo $areaTrabajoIdAreaTrabajo
 * @property Privilegio $privilegioIdPrivilegio
 * @property Salud $saludIdSalud
 * @property Evaluacion[] $evaluacions
 * @property Horario[] $horarios
 * @property Liquidacion[] $liquidacions
 * @property Permiso[] $permisos
 * @property Vacaciones[] $vacaciones
 */
class Empleado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empleado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('rut, contrasena, nombres, apellidos, estadoEmpleado, AreaTrabajo_idAreaTrabajo, Privilegio_idPrivilegio, AFP_idAFP, Salud_idSalud, Contrato_idContrato', 'required'),
			array('AreaTrabajo_idAreaTrabajo, Privilegio_idPrivilegio, AFP_idAFP, Salud_idSalud, Contrato_idContrato', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>9),
			array('contrasena, nombres, apellidos, estadoEmpleado', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEmpleado, rut, contrasena, nombres, apellidos, estadoEmpleado, AreaTrabajo_idAreaTrabajo, Privilegio_idPrivilegio, AFP_idAFP, Salud_idSalud, Contrato_idContrato', 'safe', 'on'=>'search'),
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
			'asistencias' => array(self::HAS_MANY, 'Asistencia', 'Empleado_idEmpleado'),
			'aFPIdAFP' => array(self::BELONGS_TO, 'Afp', 'AFP_idAFP'),
			'areaTrabajoIdAreaTrabajo' => array(self::BELONGS_TO, 'Areatrabajo', 'AreaTrabajo_idAreaTrabajo'),
			'privilegioIdPrivilegio' => array(self::BELONGS_TO, 'Privilegio', 'Privilegio_idPrivilegio'),
			'saludIdSalud' => array(self::BELONGS_TO, 'Salud', 'Salud_idSalud'),
			'evaluacions' => array(self::HAS_MANY, 'Evaluacion', 'Empleado_idEmpleado'),
			'horarios' => array(self::HAS_MANY, 'Horario', 'Empleado_idEmpleado'),
			'liquidacions' => array(self::HAS_MANY, 'Liquidacion', 'Empleado_idEmpleado'),
			'permisos' => array(self::HAS_MANY, 'Permiso', 'Empleado_idEmpleado'),
			'vacaciones' => array(self::HAS_MANY, 'Vacaciones', 'Empleado_idEmpleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEmpleado' => 'Id Empleado',
			'rut' => 'Rut',
			'contrasena' => 'Contrasena',
			'nombres' => 'Nombres',
			'apellidos' => 'Apellidos',
			'estadoEmpleado' => 'Estado Empleado',
			'AreaTrabajo_idAreaTrabajo' => 'Area Trabajo Id Area Trabajo',
			'Privilegio_idPrivilegio' => 'Privilegio Id Privilegio',
			'AFP_idAFP' => 'Afp Id Afp',
			'Salud_idSalud' => 'Salud Id Salud',
			'Contrato_idContrato' => 'Contrato Id Contrato',
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

		$criteria->compare('idEmpleado',$this->idEmpleado);
		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('contrasena',$this->contrasena,true);
		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('apellidos',$this->apellidos,true);
		$criteria->compare('estadoEmpleado',$this->estadoEmpleado,true);
		$criteria->compare('AreaTrabajo_idAreaTrabajo',$this->AreaTrabajo_idAreaTrabajo);
		$criteria->compare('Privilegio_idPrivilegio',$this->Privilegio_idPrivilegio);
		$criteria->compare('AFP_idAFP',$this->AFP_idAFP);
		$criteria->compare('Salud_idSalud',$this->Salud_idSalud);
		$criteria->compare('Contrato_idContrato',$this->Contrato_idContrato);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Empleado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
