<?php
/* @var $this AnticipoController */
/* @var $data Anticipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idAnticipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAnticipo), array('view', 'id'=>$data->idAnticipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('montoAnticipo')); ?>:</b>
	<?php echo CHtml::encode($data->montoAnticipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fechaSolicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaResolucion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaResolucion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoAnticipo')); ?>:</b>
	<?php echo CHtml::encode($data->estadoAnticipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Liquidacion_idLiquidacion')); ?>:</b>
	<?php echo CHtml::encode($data->Liquidacion_idLiquidacion); ?>
	<br />


</div>