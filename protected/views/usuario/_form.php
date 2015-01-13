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

    <?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?>
    <?php echo ($model->scenario=="update")?null:$form->dropDownListControlGroup($model,'PER_CORREL',CHtml::listData($per, 'PER_CORREL', 'nombreRut'),array ('prompt'=>'Seleccione una persona'));?>
    <?php echo $form->passwordFieldControlGroup($model,'USU_PASSWORD',array('maxlength'=>200)); ?>
    <?php echo ($model->scenario=="update")?null:$form->passwordFieldControlGroup($model,'password',array('maxlength'=>200)); ?>
    <?php 
    $usuarios=array('USUARIO'=>'Usuario','FUNCIONARIO'=>'Funcionario');
    if(Usuario::model()->permisosAcceso('SUPERADMIN'))$usuarios+=array('ADMIN'=>'Administrador','SUPERADMIN'=>'SUPERADMIN');
     ?>
    <?php echo $form->dropDownListControlGroup($model,'USU_ROLE',$usuarios,array ('prompt'=>'Seleccione un rol'));?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
