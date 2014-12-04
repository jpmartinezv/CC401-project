<?php
/* @var $this HorariocanchaController */
/* @var $data Horariocancha */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idHorario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idHorario), array('view', 'id'=>$data->idHorario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia')); ?>:</b>
	<?php echo CHtml::encode($data->dia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCancha')); ?>:</b>
	<?php echo CHtml::encode($data->idCancha); ?>
	<br />


</div>