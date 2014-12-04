<?php
/* @var $this CanchaController */
/* @var $model Cancha */

$this->breadcrumbs=array(
	'Canchas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cancha', 'url'=>array('index')),
	array('label'=>'Manage Cancha', 'url'=>array('admin')),
);
?>

<h1>Create Cancha</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>