<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'accidente-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'PLA_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'CAR_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textAreaControlGroup($model,'ACC_DESCRICPION',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'ACC_SITIO',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_FECHA'); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_PARAFECT',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_TIPO',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_AGENTE',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_ACCION',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_CONSEC',array('maxlength'=>0)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
