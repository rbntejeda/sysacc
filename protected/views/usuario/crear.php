<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('icon' => 'glyphicon glyphicon-tasks','label'=>'Administrar', 'url'=>array('admin')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Crear Usuario', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Crear','Usuario'); ?>
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
    <?php echo $form->textFieldControlGroup($model,'PER_RUT',array('disabled'=>true)); ?>
    <?php echo $form->passwordFieldControlGroup($model,'USU_PASSWORD',array('maxlength'=>200,'required'=>true)); ?>
    <?php echo ($model->scenario=="update")?null:$form->passwordFieldControlGroup($model,'password',array('maxlength'=>200)); ?>
    <?php 
    $usuarios=array('USUARIO'=>'Usuario','FUNCIONARIO'=>'Funcionario');
    if(Usuario::model()->permisosAcceso('SUPERADMIN'))
    	$usuarios+=array('ADMIN'=>'Administrador','SUPERADMIN'=>'SUPERADMIN');
     ?>
    <?php echo $form->dropDownListControlGroup($model,'USU_ROLE',$usuarios,array ('prompt'=>'Seleccione un rol'));?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Crear', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
