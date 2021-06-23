<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idEmpleado,
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'Update Empleado', 'url'=>array('update', 'id'=>$model->idEmpleado)),
	array('label'=>'Delete Empleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEmpleado),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>View Empleado #<?php echo $model->idEmpleado; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEmpleado',
		'rut',
		'contrasena',
		'nombres',
		'apellidos',
		'estadoEmpleado',
                array(               
                'label'=>'AreaTrabajo_idAreaTrabajo',
                'type'=>'raw',
                'value'=>CHtml::link(CHtml::encode($model->AreaTrabajo_idAreaTrabajo),
                                 array('empleado/view','id'=>$model->AreaTrabajo_idAreaTrabajo))),
            array(               
                'label'=>'Privilegio_idPrivilegio',
                'type'=>'raw',
                'value'=>CHtml::link(CHtml::encode($model->Privilegio_idPrivilegio),
                                 array('empleado/view','id'=>$model->Privilegio_idPrivilegio))),
            array(               
                'label'=>'AFP_idAFP',
                'type'=>'raw',
                'value'=>CHtml::link(CHtml::encode($model->AFP_idAFP),
                                 array('empleado/view','id'=>$model->AFP_idAFP))),
            array(               
                'label'=>'Salud_idSalud',
                'type'=>'raw',
                'value'=>CHtml::link(CHtml::encode($model->Salud_idSalud),
                                 array('empleado/view','id'=>$model->Salud_idSalud)))
	),
)); ?>
