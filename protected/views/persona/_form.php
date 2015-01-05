<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'persona-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'CAR_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_NOMBRE',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_PATERNO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_MATERNO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_EMAIL',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_TELEFONO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_DIRECCION',array('maxlength'=>300)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
