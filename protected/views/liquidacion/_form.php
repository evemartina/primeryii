<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'liquidacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaLiquidacion'); ?>
		<?php echo $form->textField($model,'fechaLiquidacion'); ?>
		<?php echo $form->error($model,'fechaLiquidacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sueldoBase'); ?>
		<?php echo $form->textField($model,'sueldoBase'); ?>
		<?php echo $form->error($model,'sueldoBase'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horasTrabajadas'); ?>
		<?php echo $form->textField($model,'horasTrabajadas'); ?>
		<?php echo $form->error($model,'horasTrabajadas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diasTrabajados'); ?>
		<?php echo $form->textField($model,'diasTrabajados'); ?>
		<?php echo $form->error($model,'diasTrabajados'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antesImp'); ?>
		<?php echo $form->textField($model,'antesImp'); ?>
		<?php echo $form->error($model,'antesImp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seguroCesantia'); ?>
		<?php echo $form->textField($model,'seguroCesantia'); ?>
		<?php echo $form->error($model,'seguroCesantia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'despuesImp'); ?>
		<?php echo $form->textField($model,'despuesImp'); ?>
		<?php echo $form->error($model,'despuesImp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'liquido'); ?>
		<?php echo $form->textField($model,'liquido'); ?>
		<?php echo $form->error($model,'liquido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aPagar'); ?>
		<?php echo $form->textField($model,'aPagar'); ?>
		<?php echo $form->error($model,'aPagar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoLiquidacion'); ?>
		<?php echo $form->textField($model,'estadoLiquidacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estadoLiquidacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->textField($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->error($model,'Empleado_idEmpleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->