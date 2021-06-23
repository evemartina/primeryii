<?php

/**
 * This is the model class for table "privilegio".
 *
 * The followings are the available columns in table 'privilegio':
 * @property integer $idPrivilegio
 * @property string $nombre
 * @property string $acceso
 *
 * The followings are the available model relations:
 * @property Empleado[] $empleados
 */
class Privilegio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'privilegio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, acceso', 'required'),
			array('nombre', 'length', 'max'=>45),
			array('acceso', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idPrivilegio, nombre, acceso', 'safe', 'on'=>'search'),
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
			'empleados' => array(self::HAS_MANY, 'Empleado', 'Privilegio_idPrivilegio'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPrivilegio' => 'Id Privilegio',
			'nombre' => 'Nombre',
			'acceso' => 'Acceso',
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

		$criteria->compare('idPrivilegio',$this->idPrivilegio);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('acceso',$this->acceso,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Privilegio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
