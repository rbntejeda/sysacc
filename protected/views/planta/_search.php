<?php
/* @var $this PlantaController */
/* @var $model Planta */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'PLA_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_DIRECCION',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_TELEFONO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_ESTADO',array('maxlength'=>8)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
