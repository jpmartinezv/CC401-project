<?php
/* @var $this CanchaController */
/* @var $model Cancha */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCancha'); ?>
		<?php echo $form->textField($model,'idCancha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarifaD'); ?>
		<?php echo $form->textField($model,'tarifaD'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarifaN'); ?>
		<?php echo $form->textField($model,'tarifaN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idLocal'); ?>
		<?php echo $form->textField($model,'idLocal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->