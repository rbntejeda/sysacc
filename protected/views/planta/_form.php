<?php
/* @var $this PlantaController */
/* @var $model Planta */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'planta-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model,'COM_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_DIRECCION',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_TELEFONO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_ESTADO',array('maxlength'=>8)); ?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
