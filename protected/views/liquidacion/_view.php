<?php
/* @var $this LiquidacionController */
/* @var $data Liquidacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLiquidacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idLiquidacion), array('view', 'id'=>$data->idLiquidacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaLiquidacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaLiquidacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sueldoBase')); ?>:</b>
	<?php echo CHtml::encode($data->sueldoBase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horasTrabajadas')); ?>:</b>
	<?php echo CHtml::encode($data->horasTrabajadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diasTrabajados')); ?>:</b>
	<?php echo CHtml::encode($data->diasTrabajados); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antesImp')); ?>:</b>
	<?php echo CHtml::encode($data->antesImp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguroCesantia')); ?>:</b>
	<?php echo CHtml::encode($data->seguroCesantia); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('despuesImp')); ?>:</b>
	<?php echo CHtml::encode($data->despuesImp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('liquido')); ?>:</b>
	<?php echo CHtml::encode($data->liquido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aPagar')); ?>:</b>
	<?php echo CHtml::encode($data->aPagar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoLiquidacion')); ?>:</b>
	<?php echo CHtml::encode($data->estadoLiquidacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Empleado_idEmpleado')); ?>:</b>
	<?php echo CHtml::encode($data->Empleado_idEmpleado); ?>
	<br />

</div>