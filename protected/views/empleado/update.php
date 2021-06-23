<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */

$this->breadcrumbs=array(
	'Empleados'=>array('index'),
	$model->idEmpleado=>array('view','id'=>$model->idEmpleado),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleado', 'url'=>array('index')),
	array('label'=>'Create Empleado', 'url'=>array('create')),
	array('label'=>'View Empleado', 'url'=>array('view', 'id'=>$model->idEmpleado)),
	array('label'=>'Manage Empleado', 'url'=>array('admin')),
);
?>

<h1>Update Empleado <?php echo $model->idEmpleado; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>