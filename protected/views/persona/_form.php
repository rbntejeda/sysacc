<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form BSActiveForm */

    $cs= Yii::app()->clientScript;
    $baseUrl = Yii::app()->request->baseUrl;
    //Validacion de Rut
    $cs->registerScriptFile($baseUrl . '/js/jquery.Rut.min.js', CClientScript::POS_END);
    $cs->registerScript('validarRut',"$(document).ready(function(){ $('#Persona_PER_RUT').Rut({on_error: function(){ alert('Rut incorrecto'); }});})");
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'persona-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>

    <?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_NOMBRE',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_PATERNO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_MATERNO',array('maxlength'=>50)); ?>
    <?php echo $form->dropDownListControlGroup($model,'EMP_CORREL',CHtml::listData(Empresa::model()->findAll(), 'EMP_CORREL', 'EMP_NOMBRE'),array ('prompt'=>'Seleccione una empresa'));?>
    <?php echo $form->dropDownListControlGroup($model,'CAR_CORREL',CHtml::listData(Cargo::model()->findAll(), 'CAR_CORREL', 'CAR_NOMBRE'),array ('prompt'=>'Seleccione un cargo'));?>
    <?php echo $form->emailFieldControlGroup($model,'PER_EMAIL',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_TELEFONO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_DIRECCION',array('maxlength'=>300)); ?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
