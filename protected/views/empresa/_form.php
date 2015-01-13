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

    <?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?> 
    <?php echo $form->dropDownListControlGroup($model,'COM_CORREL',CHtml::listData(Comuna::model()->findAll(), 'COM_CORREL', 'COM_NOMBRE'),array ('prompt'=>'Seleccione una comuna'));?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_DIRECCION',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_TELEFONO',array('maxlength'=>45)); ?>
    <?php echo $form->inlineCheckBoxListControlGroup($model, 'EMP_AREA', array(
        'Bosques'=>'Bosques',
        'Aserradero'=>'Aserradero',
        'Remanufactura'=>'Remanufactura',
        'Celulosa'=>'Celulosa',
        'Papel'=>'Papel',
        'Tableros y Chapas'=>'Tableros y Chapas'
    ));?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
