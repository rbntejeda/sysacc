<?php
/* @var $this PersonaController */
/* @var $model Persona */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'CAR_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_NOMBRE',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_PATERNO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_MATERNO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_EMAIL',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_TELEFONO',array('maxlength'=>50)); ?>
    <?php echo $form->textFieldControlGroup($model,'PER_DIRECCION',array('maxlength'=>300)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
