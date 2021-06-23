<?php
/* @var $this AnticipoController */
/* @var $model Anticipo */

$this->breadcrumbs=array(
	'Anticipos'=>array('index'),
	$model->idAnticipo=>array('view','id'=>$model->idAnticipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anticipo', 'url'=>array('index')),
	array('label'=>'Create Anticipo', 'url'=>array('create')),
	array('label'=>'View Anticipo', 'url'=>array('view', 'id'=>$model->idAnticipo)),
	array('label'=>'Manage Anticipo', 'url'=>array('admin')),
);
?>

<h1>Update Anticipo <?php echo $model->idAnticipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>