<?php

/**
 * This is the model class for table "bono_has_liquidacion".
 *
 * The followings are the available columns in table 'bono_has_liquidacion':
 * @property integer $idBono_has_Liquidacioncol
 * @property integer $Bono_idBono
 * @property integer $Liquidacion_idLiquidacion
 * @property string $fechaAsignacion
 *
 * The followings are the available model relations:
 * @property Bono $bonoIdBono
 * @property Liquidacion $liquidacionIdLiquidacion
 */
class BonoHasLiquidacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bono_has_liquidacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Bono_idBono, Liquidacion_idLiquidacion, fechaAsignacion', 'required'),
			array('Bono_idBono, Liquidacion_idLiquidacion', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idBono_has_Liquidacioncol, Bono_idBono, Liquidacion_idLiquidacion, fechaAsignacion', 'safe', 'on'=>'search'),
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
			'bonoIdBono' => array(self::BELONGS_TO, 'Bono', 'Bono_idBono'),
			'liquidacionIdLiquidacion' => array(self::BELONGS_TO, 'Liquidacion', 'Liquidacion_idLiquidacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idBono_has_Liquidacioncol' => 'Id Bono Has Liquidacioncol',
			'Bono_idBono' => 'Bono Id Bono',
			'Liquidacion_idLiquidacion' => 'Liquidacion Id Liquidacion',
			'fechaAsignacion' => 'Fecha Asignacion',
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

		$criteria->compare('idBono_has_Liquidacioncol',$this->idBono_has_Liquidacioncol);
		$criteria->compare('Bono_idBono',$this->Bono_idBono);
		$criteria->compare('Liquidacion_idLiquidacion',$this->Liquidacion_idLiquidacion);
		$criteria->compare('fechaAsignacion',$this->fechaAsignacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BonoHasLiquidacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
