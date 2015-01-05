<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'usuario-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>

    <p class="help-block">Los campos con <span class="required">*</span> son requeridos.</p>

    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->dropDownListControlGroup($model,'PER_CORREL',CHtml::listData(Persona::model()->findAll(), 'PER_CORREL', 'Nombrecompleto'),array ('prompt'=>'Seleccione una persona'));?>
    <?php echo $form->textFieldControlGroup($model,'USU_PASSWORD',array('maxlength'=>200)); ?>
    <?php $usuarios=array(
        'USUARIO'=>'Usuario',
        'ADMIN'=>'Administrador',
        'FUNCIONARIO'=>'Funcionario',
        'SUPERADMIN'=>'SUPERADMIN'
    ) ?>
    <?php echo $form->dropDownListControlGroup($model,'USU_ROLE',$usuarios,array ('prompt'=>'Seleccione un rol'));?>
    <?php echo $form->dropDownListControlGroup($model,'USU_ESTADO',array('ACTIVO'=>'Activo','INACTIVO'=>'Inactivo'))?>
    <?php echo $form->textFieldControlGroup($model,'USU_TIPO',array('maxlength'=>11)); ?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
