<?php
/* @var $this CanchaController */
/* @var $model Cancha */

$this->breadcrumbs=array(
	'Canchas'=>array('index'),
	$model->idCancha=>array('view','id'=>$model->idCancha),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cancha', 'url'=>array('index')),
	array('label'=>'Create Cancha', 'url'=>array('create')),
	array('label'=>'View Cancha', 'url'=>array('view', 'id'=>$model->idCancha)),
	array('label'=>'Manage Cancha', 'url'=>array('admin')),
);
?>

<h1>Update Cancha <?php echo $model->idCancha; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>