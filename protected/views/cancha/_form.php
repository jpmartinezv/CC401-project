<?php
/* @var $this CanchaController */
/* @var $model Cancha */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cancha-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarifaD'); ?>
		<?php echo $form->textField($model,'tarifaD'); ?>
		<?php echo $form->error($model,'tarifaD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarifaN'); ?>
		<?php echo $form->textField($model,'tarifaN'); ?>
		<?php echo $form->error($model,'tarifaN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idLocal'); ?>
		<?php echo $form->textField($model,'idLocal'); ?>
		<?php echo $form->error($model,'idLocal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->