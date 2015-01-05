<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'empresa-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?> 
    <?php echo $form->dropDownListControlGroup($model,'COM_CORREL',CHtml::listData(Comuna::model()->findAll(), 'COM_CORREL', 'COM_NOMBRE'),array ('prompt'=>'Seleccione una comuna'));?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_DIRECCION',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_TELEFONO',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_ESTADO',array('maxlength'=>8)); ?>

    <?php echo BsHtml::submitButton('Submit', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>

<?php $this->endWidget(); ?>
