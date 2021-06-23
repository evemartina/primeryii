<?php
/* @var $this AnticipoController */
/* @var $model Anticipo */

$this->breadcrumbs=array(
	'Anticipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Anticipo', 'url'=>array('index')),
	array('label'=>'Manage Anticipo', 'url'=>array('admin')),
);
?>

<h1>Create Anticipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>