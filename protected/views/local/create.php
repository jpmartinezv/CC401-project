<?php
/* @var $this LocalController */
/* @var $model Local */

$this->breadcrumbs=array(
	'Locals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Local', 'url'=>array('index')),
);
?>

<h1>Publicar Cancha</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>