<?php
/* @var $this AreaController */
/* @var $model Area */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'area-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
)); ?>

    <?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'ARE_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'ARE_NOMBRE',array('maxlength'=>300)); ?>
    <?php echo $form->textFieldControlGroup($model,'ARE_TIPO',array('maxlength'=>10)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
