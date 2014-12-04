<?php
/* @var $this HorariocanchaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horariocanchas',
);

$this->menu=array(
	array('label'=>'Create Horariocancha', 'url'=>array('create')),
	array('label'=>'Manage Horariocancha', 'url'=>array('admin')),
);
?>

<h1>Horariocanchas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
