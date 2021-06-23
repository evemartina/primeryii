<?php
/* @var $this EmpleadoController */
/* @var $model Empleado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empleado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rut'); ?>
		<?php echo $form->textField($model,'rut',array('size'=>9,'maxlength'=>9)); ?>
		<?php echo $form->error($model,'rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombres'); ?>
		<?php echo $form->textField($model,'nombres',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombres'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellidos'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoEmpleado'); ?>
		<?php echo $form->textField($model,'estadoEmpleado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estadoEmpleado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AreaTrabajo_idAreaTrabajo'); ?>
		<?php echo $form->dropDownList($model,'AreaTrabajo_idAreaTrabajo',  
                        CHtml::listData(Areatrabajo::model()->findAll(),'idAreaTrabajo','nombre'),
                        array('empty'=>'seleccione el area de trabajo')
                        ); ?>
		<?php echo $form->error($model,'AreaTrabajo_idAreaTrabajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Privilegio_idPrivilegio'); ?>
		<?php echo $form->dropDownList($model,'Privilegio_idPrivilegio',                        
                        CHtml::listData(Privilegio::model()->findAll(),'idPrivilegio','nombre'),
                        array('empty'=>'seleccione su privilegio de acciones')
                        ); ?>
		<?php echo $form->error($model,'Privilegio_idPrivilegio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'AFP_idAFP'); ?>
		<?php echo $form->dropDownList($model,'AFP_idAFP',
                        CHtml::listData(Afp::model()->findAll(),'idAFP','nombre'),
                        array('empty'=>'seleccione su AFP')
                        ); ?>
		<?php echo $form->error($model,'AFP_idAFP'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Salud_idSalud'); ?>
		<?php echo $form->dropDownList($model,'Salud_idSalud',
                        CHtml::listData(Salud::model()->findAll(),'idSalud','nombre'),
                        array('empty'=>'seleccione su Salud')
                        ); ?>
		<?php echo $form->error($model,'Salud_idSalud'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->