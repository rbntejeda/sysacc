<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'usuario-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>
<?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->passwordFieldControlGroup($model,'USU_PASSWORD',array('maxlength'=>200,'placeholder'=>"Escriba una nueva contraseña")); ?>
     <?php echo $form->passwordFieldControlGroup($model,'password',array('maxlength'=>200));?>
   
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>
    <?php $this->endWidget(); ?>
    