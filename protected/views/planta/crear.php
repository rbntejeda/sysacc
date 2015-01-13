<?php
/* @var $this PlantaController */
/* @var $model Planta */
?>

<?php
$this->breadcrumbs=array(
	'Plantas',
	'Agregar',
);
?>

<?php echo BsHtml::pageHeader('Añadir','Planta - '.$model->EMP_NOMBRE) ?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'planta-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>

    <?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->dropDownListControlGroup($model,'COM_CORREL',CHtml::listData(Comuna::model()->findAll(), 'COM_CORREL', 'COM_NOMBRE'),array ('prompt'=>'Seleccione un cargo'));?>
    <?php echo $form->textFieldControlGroup($model,'PLA_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_DIRECCION',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_TELEFONO',array('maxlength'=>50)); ?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>
	<?php $this->endWidget(); ?>