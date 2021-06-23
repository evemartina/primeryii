<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'inicioContrato'); ?>
		<?php echo $form->textField($model,'inicioContrato'); ?>
		<?php echo $form->error($model,'inicioContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terminoContrato'); ?>
		<?php echo $form->textField($model,'terminoContrato'); ?>
		<?php echo $form->error($model,'terminoContrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sueldoBase'); ?>
		<?php echo $form->textField($model,'sueldoBase'); ?>
		<?php echo $form->error($model,'sueldoBase'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empleado_idEmpleado'); ?>
		<?php echo $form->dropDownList($model,'Empleado_idEmpleado',
                        CHtml::listData(Empleado::model()->findAll(),'idEmpleado','rut'),
                        array('empty'=>'seleccione al empleado recien ingresado')
                        ); ?>
		<?php echo $form->error($model,'Empleado_idEmpleado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->