<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */

$this->breadcrumbs=array(
	'Liquidacions'=>array('index'),
	$model->idLiquidacion,
);

$this->menu=array(
	array('label'=>'List Liquidacion', 'url'=>array('index')),
	array('label'=>'Create Liquidacion', 'url'=>array('create')),
	array('label'=>'Update Liquidacion', 'url'=>array('update', 'id'=>$model->idLiquidacion)),
	array('label'=>'Delete Liquidacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idLiquidacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Liquidacion', 'url'=>array('admin')),
);
?>

<h1>View Liquidacion #<?php echo $model->idLiquidacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idLiquidacion',
		'fechaLiquidacion',
		'sueldoBase',
		'horasTrabajadas',
		'diasTrabajados',
		'antesImp',
		'seguroCesantia',
		'despuesImp',
		'liquido',
		'aPagar',
		'estadoLiquidacion',
                array(               
                'label'=>'Empleado_idEmpleado',
                'type'=>'raw',
                'value'=>CHtml::link(CHtml::encode($model->Empleado_idEmpleado),
                                 array('empleado/view','id'=>$model->Empleado_idEmpleado)))
	),
)); ?>
