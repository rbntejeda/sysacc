<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'usuario-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_PASSWORD',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_ESTADO',array('maxlength'=>9)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_ROLE',array('maxlength'=>11)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_END'); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_NEW'); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_TIPO',array('maxlength'=>11)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
