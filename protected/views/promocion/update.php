<?php
/* @var $this PromocionController */
/* @var $model Promocion */

$this->breadcrumbs=array(
	'Promocions'=>array('index'),
	$model->idPromocion=>array('view','id'=>$model->idPromocion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Promocion', 'url'=>array('index')),
	array('label'=>'Create Promocion', 'url'=>array('create')),
	array('label'=>'View Promocion', 'url'=>array('view', 'id'=>$model->idPromocion)),
	array('label'=>'Manage Promocion', 'url'=>array('admin')),
);
?>

<h1>Update Promocion <?php echo $model->idPromocion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>