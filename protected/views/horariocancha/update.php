<?php
/* @var $this HorariocanchaController */
/* @var $model Horariocancha */

$this->breadcrumbs=array(
	'Horariocanchas'=>array('index'),
	$model->idHorario=>array('view','id'=>$model->idHorario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Horariocancha', 'url'=>array('index')),
	array('label'=>'Create Horariocancha', 'url'=>array('create')),
	array('label'=>'View Horariocancha', 'url'=>array('view', 'id'=>$model->idHorario)),
	array('label'=>'Manage Horariocancha', 'url'=>array('admin')),
);
?>

<h1>Update Horariocancha <?php echo $model->idHorario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>