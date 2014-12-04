<?php
/* @var $this LocalController */
/* @var $data Local */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLocal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idLocal), array('view', 'id'=>$data->idLocal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('distrito')); ?>:</b>
	<?php echo CHtml::encode($data->distrito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>