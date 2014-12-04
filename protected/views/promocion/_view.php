<?php
/* @var $this PromocionController */
/* @var $data Promocion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPromocion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPromocion), array('view', 'id'=>$data->idPromocion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />


</div>