<?php
/* @var $this HorariocanchaController */
/* @var $model Horariocancha */

$this->breadcrumbs=array(
	'Horariocanchas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Horariocancha', 'url'=>array('index')),
	array('label'=>'Manage Horariocancha', 'url'=>array('admin')),
);
?>

<h1>Create Horariocancha</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>