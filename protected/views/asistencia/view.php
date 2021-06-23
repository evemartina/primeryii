<?php
/* @var $this AsistenciaController */
/* @var $model Asistencia */

$this->breadcrumbs=array(
	'Asistencias'=>array('index'),
	$model->idAsistencia,
);

$this->menu=array(
	array('label'=>'List Asistencia', 'url'=>array('index')),
	array('label'=>'Create Asistencia', 'url'=>array('create')),
	array('label'=>'Update Asistencia', 'url'=>array('update', 'id'=>$model->idAsistencia)),
	array('label'=>'Delete Asistencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAsistencia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Asistencia', 'url'=>array('admin')),
);
?>

<h1>View Asistencia #<?php echo $model->idAsistencia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAsistencia',
		'registroEntrada',
		'registroSalida',
                array(               
                'label'=>'Empleado_idEmpleado',
                'type'=>'raw',
                'value'=>CHtml::link(CHtml::encode($model->Empleado_idEmpleado),
                                 array('empleado/view','id'=>$model->Empleado_idEmpleado)))
	),
)); ?>
