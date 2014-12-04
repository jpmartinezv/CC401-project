<?php
/* @var $this HorariocanchaController */
/* @var $model Horariocancha */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horariocancha-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia'); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCancha'); ?>
		<?php echo $form->textField($model,'idCancha'); ?>
		<?php echo $form->error($model,'idCancha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->