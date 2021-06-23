<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEmpleado'); ?>
		<?php echo $form->textField($model,'idEmpleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoEmpleado'); ?>
		<?php echo $form->textField($model,'estadoEmpleado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AreaTrabajo_idAreaTrabajo'); ?>
		<?php echo $form->textField($model,'AreaTrabajo_idAreaTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Privilegio_idPrivilegio'); ?>
		<?php echo $form->textField($model,'Privilegio_idPrivilegio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AFP_idAFP'); ?>
		<?php echo $form->textField($model,'AFP_idAFP'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Salud_idSalud'); ?>
		<?php echo $form->textField($model,'Salud_idSalud'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->