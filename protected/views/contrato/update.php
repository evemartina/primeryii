<?php
/* @var $this ContratoController */
/* @var $model Contrato */

$this->breadcrumbs=array(
	'Contratos'=>array('index'),
	$model->idContrato=>array('view','id'=>$model->idContrato),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contrato', 'url'=>array('index')),
	array('label'=>'Create Contrato', 'url'=>array('create')),
	array('label'=>'View Contrato', 'url'=>array('view', 'id'=>$model->idContrato)),
	array('label'=>'Manage Contrato', 'url'=>array('admin')),
);
?>

<h1>Update Contrato <?php echo $model->idContrato; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>