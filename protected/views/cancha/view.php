<?php
/* @var $this CanchaController */
/* @var $model Cancha */

$this->breadcrumbs=array(
	'Canchas'=>array('index'),
	$model->idCancha,
);

$this->menu=array(
	array('label'=>'List Cancha', 'url'=>array('index')),
	array('label'=>'Create Cancha', 'url'=>array('create')),
	array('label'=>'Update Cancha', 'url'=>array('update', 'id'=>$model->idCancha)),
	array('label'=>'Delete Cancha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCancha),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cancha', 'url'=>array('admin')),
);
?>

<h1>View Cancha #<?php echo $model->idCancha; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCancha',
		'nombre',
		'tarifaD',
		'tarifaN',
		'idLocal',
	),
)); ?>
