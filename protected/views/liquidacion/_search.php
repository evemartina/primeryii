<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idLiquidacion'); ?>
		<?php echo $form->textField($model,'idLiquidacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaLiquidacion'); ?>
		<?php echo $form->textField($model,'fechaLiquidacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sueldoBase'); ?>
		<?php echo $form->textField($model,'sueldoBase'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horasTrabajadas'); ?>
		<?php echo $form->textField($model,'horasTrabajadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diasTrabajados'); ?>
		<?php echo $form->textField($model,'diasTrabajados'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antesImp'); ?>
		<?php echo $form->textField($model,'antesImp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seguroCesantia'); ?>
		<?php echo $form->textField($model,'seguroCesantia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'despuesImp'); ?>
		<?php echo $form->textField($model,'despuesImp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'liquido'); ?>
		<?php echo $form->textField($model,'liquido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aPagar'); ?>
		<?php echo $form->textField($model,'aPagar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoLiquidacion'); ?>
		<?php echo $form->textField($model,'estadoLiquidacion',array('size'=>45,'maxlength'=>45)); ?>
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