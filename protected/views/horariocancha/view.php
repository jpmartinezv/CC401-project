<?php
/* @var $this HorariocanchaController */
/* @var $model Horariocancha */

$this->breadcrumbs=array(
	'Horariocanchas'=>array('index'),
	$model->idHorario,
);

$this->menu=array(
	array('label'=>'List Horariocancha', 'url'=>array('index')),
	array('label'=>'Create Horariocancha', 'url'=>array('create')),
	array('label'=>'Update Horariocancha', 'url'=>array('update', 'id'=>$model->idHorario)),
	array('label'=>'Delete Horariocancha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idHorario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Horariocancha', 'url'=>array('admin')),
);
?>

<h1>View Horariocancha #<?php echo $model->idHorario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idHorario',
		'dia',
		'hora',
		'idCancha',
	),
)); ?>
