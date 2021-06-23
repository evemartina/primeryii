<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idContrato'); ?>
		<?php echo $form->textField($model,'idContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inicioContrato'); ?>
		<?php echo $form->textField($model,'inicioContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminoContrato'); ?>
		<?php echo $form->textField($model,'terminoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sueldoBase'); ?>
		<?php echo $form->textField($model,'sueldoBase'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->textField($model,'Empleado_idEmpleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->