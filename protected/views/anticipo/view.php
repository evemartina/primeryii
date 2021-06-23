<?php
/* @var $this AnticipoController */
/* @var $model Anticipo */

$this->breadcrumbs=array(
	'Anticipos'=>array('index'),
	$model->idAnticipo,
);

$this->menu=array(
	array('label'=>'List Anticipo', 'url'=>array('index')),
	array('label'=>'Create Anticipo', 'url'=>array('create')),
	array('label'=>'Update Anticipo', 'url'=>array('update', 'id'=>$model->idAnticipo)),
	array('label'=>'Delete Anticipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAnticipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anticipo', 'url'=>array('admin')),
);
?>

<h1>View Anticipo #<?php echo $model->idAnticipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idAnticipo',
		'montoAnticipo',
		'fechaSolicitud',
		'fechaResolucion',
		'estadoAnticipo',
                array(               
                'label'=>'Liquidacion_idLiquidacion',
                'type'=>'raw',
                'value'=>CHtml::link(CHtml::encode($model->Liquidacion_idLiquidacion),
                                 array('liquidacion/view','id'=>$model->Liquidacion_idLiquidacion)),
        ),
	),
)); ?>
