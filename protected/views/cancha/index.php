<?php
/* @var $this CanchaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Canchas',
);

$this->menu=array(
	array('label'=>'Create Cancha', 'url'=>array('create')),
	array('label'=>'Manage Cancha', 'url'=>array('admin')),
);
?>

<h1>Canchas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
