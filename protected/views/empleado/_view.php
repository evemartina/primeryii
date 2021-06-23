<?php
/* @var $this EmpleadoController */
/* @var $data Empleado */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEmpleado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEmpleado), array('view', 'id'=>$data->idEmpleado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrasena')); ?>:</b>
	<?php echo CHtml::encode($data->contrasena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
	<?php echo CHtml::encode($data->nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->estadoEmpleado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AreaTrabajo_idAreaTrabajo')); ?>:</b>
	<?php echo CHtml::encode($data->AreaTrabajo_idAreaTrabajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Privilegio_idPrivilegio')); ?>:</b>
	<?php echo CHtml::encode($data->Privilegio_idPrivilegio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AFP_idAFP')); ?>:</b>
	<?php echo CHtml::encode($data->AFP_idAFP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Salud_idSalud')); ?>:</b>
	<?php echo CHtml::encode($data->Salud_idSalud); ?>
	<br />

</div>