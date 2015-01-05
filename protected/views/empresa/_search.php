<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'EMP_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'COM_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_NOMBRE',array('maxlength'=>150)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_DIRECCION',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_TELEFONO',array('maxlength'=>45)); ?>
    <?php echo $form->textFieldControlGroup($model,'EMP_ESTADO',array('maxlength'=>8)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
