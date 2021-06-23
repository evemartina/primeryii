<?php
/* @var $this AsistenciaController */
/* @var $model Asistencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAsistencia'); ?>
		<?php echo $form->textField($model,'idAsistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registroEntrada'); ?>
		<?php echo $form->textField($model,'registroEntrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'registroSalida'); ?>
		<?php echo $form->textField($model,'registroSalida'); ?>
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