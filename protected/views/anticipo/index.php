<?php
/* @var $this AnticipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anticipos',
);

$this->menu=array(
	array('label'=>'Create Anticipo', 'url'=>array('create')),
	array('label'=>'Manage Anticipo', 'url'=>array('admin')),
);
?>

<h1>Anticipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
