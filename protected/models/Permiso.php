<?php

/**
 * This is the model class for table "permiso".
 *
 * The followings are the available columns in table 'permiso':
 * @property integer $idPermiso
 * @property string $inicioPermiso
 * @property string $terminoPermiso
 * @property string $descripcion
 * @property string $fechaSolicitud
 * @property string $fechaResolucion
 * @property string $estadoPermiso
 * @property integer $Empleado_idEmpleado
 * @property integer $TipoPermisos_idTipoPermisos
 *
 * The followings are the available model relations:
 * @property Empleado $empleadoIdEmpleado
 * @property Tipopermisos $tipoPermisosIdTipoPermisos
 */
class Permiso extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'permiso';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPermiso, inicioPermiso, terminoPermiso, descripcion, estadoPermiso, Empleado_idEmpleado, TipoPermisos_idTipoPermisos', 'required'),
			array('idPermiso, Empleado_idEmpleado, TipoPermisos_idTipoPermisos', 'numerical', 'integerOnly'=>true),
			array('estadoPermiso', 'length', 'max'=>45),
			array('fechaSolicitud, fechaResolucion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPermiso, inicioPermiso, terminoPermiso, descripcion, fechaSolicitud, fechaResolucion, estadoPermiso, Empleado_idEmpleado, TipoPermisos_idTipoPermisos', 'safe', 'on'=>'search'),
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
			'empleadoIdEmpleado' => array(self::BELONGS_TO, 'Empleado', 'Empleado_idEmpleado'),
			'tipoPermisosIdTipoPermisos' => array(self::BELONGS_TO, 'Tipopermisos', 'TipoPermisos_idTipoPermisos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPermiso' => 'Id Permiso',
			'inicioPermiso' => 'Inicio Permiso',
			'terminoPermiso' => 'Termino Permiso',
			'descripcion' => 'Descripcion',
			'fechaSolicitud' => 'Fecha Solicitud',
			'fechaResolucion' => 'Fecha Resolucion',
			'estadoPermiso' => 'Estado Permiso',
			'Empleado_idEmpleado' => 'Empleado Id Empleado',
			'TipoPermisos_idTipoPermisos' => 'Tipo Permisos Id Tipo Permisos',
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

		$criteria->compare('idPermiso',$this->idPermiso);
		$criteria->compare('inicioPermiso',$this->inicioPermiso,true);
		$criteria->compare('terminoPermiso',$this->terminoPermiso,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('fechaSolicitud',$this->fechaSolicitud,true);
		$criteria->compare('fechaResolucion',$this->fechaResolucion,true);
		$criteria->compare('estadoPermiso',$this->estadoPermiso,true);
		$criteria->compare('Empleado_idEmpleado',$this->Empleado_idEmpleado);
		$criteria->compare('TipoPermisos_idTipoPermisos',$this->TipoPermisos_idTipoPermisos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Permiso the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
