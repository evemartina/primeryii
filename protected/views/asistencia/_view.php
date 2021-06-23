<?php
/* @var $this AsistenciaController */
/* @var $data Asistencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAsistencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAsistencia), array('view', 'id'=>$data->idAsistencia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registroEntrada')); ?>:</b>
	<?php echo CHtml::encode($data->registroEntrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registroSalida')); ?>:</b>
	<?php echo CHtml::encode($data->registroSalida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleado_idEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->Empleado_idEmpleado); ?>
	<br />


</div>