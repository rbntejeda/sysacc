<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'indicador-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>

    <?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?>
    <?php echo $form->dropDownListControlGroup($model,'PLA_CORREL',CHtml::listData(Planta::model()->findAll(), 'PLA_CORREL', 'PLA_NOMBRE'));?>
    <?php echo $form->numberFieldControlGroup($model,'IND_ANYO',array('maxlength'=>10,'min'=>1990,'value'=>date('Y'),'max'=>date('Y'))); ?>
    <?php echo $form->dropDownListControlGroup($model,'IND_MES',array(
        "1"=>"Enero",
        "2"=>"Febrero",
        "3"=>"Marzo",
        "4"=>"Abril",
        "5"=>"Mayo",
        "6"=>"Junio",
        "7"=>"Julio",
        "8"=>"Agosto",
        "9"=>"Septiembre",
        "10"=>"Octubre",
        "11"=>"Noviembre",
        "12"=> "Diciembre"
    )); ?>
    <?php echo $form->numberFieldControlGroup($model,'IND_CTP',array('maxlength'=>10,'min'=>0)); ?>
    <?php echo $form->numberFieldControlGroup($model,'IND_HHMES',array('maxlength'=>10,'min'=>0)); ?>
    <?php echo $form->numberFieldControlGroup($model,'IND_DIASPERDIDOS',array('maxlength'=>10,'min'=>0)); ?>
    <?php echo $form->numberFieldControlGroup($model,'IND_DOTACION',array('maxlength'=>10,'min'=>0)); ?>
    <?php echo $form->numberFieldControlGroup($model,'IND_PRODUCCION',array('maxlength'=>10,'min'=>0)); ?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>
    <?php $this->endWidget(); ?>
</div>
