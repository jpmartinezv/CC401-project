<?php
/* @var $this CanchaController */
/* @var $data Cancha */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCancha')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCancha), array('view', 'id'=>$data->idCancha)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifaD')); ?>:</b>
	<?php echo CHtml::encode($data->tarifaD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarifaN')); ?>:</b>
	<?php echo CHtml::encode($data->tarifaN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLocal')); ?>:</b>
	<?php echo CHtml::encode($data->idLocal); ?>
	<br />


</div>