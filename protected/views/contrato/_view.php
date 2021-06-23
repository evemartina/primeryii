<?php
/* @var $this ContratoController */
/* @var $data Contrato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idContrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idContrato), array('view', 'id'=>$data->idContrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicioContrato')); ?>:</b>
	<?php echo CHtml::encode($data->inicioContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terminoContrato')); ?>:</b>
	<?php echo CHtml::encode($data->terminoContrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sueldoBase')); ?>:</b>
	<?php echo CHtml::encode($data->sueldoBase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleado_idEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->Empleado_idEmpleado); ?>
	<br />


</div>