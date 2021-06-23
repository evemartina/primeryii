<?php
/* @var $this AnticipoController */
/* @var $model Anticipo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAnticipo'); ?>
		<?php echo $form->textField($model,'idAnticipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoAnticipo'); ?>
		<?php echo $form->textField($model,'montoAnticipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaSolicitud'); ?>
		<?php echo $form->textField($model,'fechaSolicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaResolucion'); ?>
		<?php echo $form->textField($model,'fechaResolucion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoAnticipo'); ?>
		<?php echo $form->textField($model,'estadoAnticipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Liquidacion_idLiquidacion'); ?>
		<?php echo $form->textField($model,'Liquidacion_idLiquidacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->