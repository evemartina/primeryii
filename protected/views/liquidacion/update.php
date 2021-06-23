<?php
/* @var $this LiquidacionController */
/* @var $model Liquidacion */

$this->breadcrumbs=array(
	'Liquidacions'=>array('index'),
	$model->idLiquidacion=>array('view','id'=>$model->idLiquidacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Liquidacion', 'url'=>array('index')),
	array('label'=>'Create Liquidacion', 'url'=>array('create')),
	array('label'=>'View Liquidacion', 'url'=>array('view', 'id'=>$model->idLiquidacion)),
	array('label'=>'Manage Liquidacion', 'url'=>array('admin')),
);
?>

<h1>Update Liquidacion <?php echo $model->idLiquidacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>