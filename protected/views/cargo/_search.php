<?php
/* @var $this CargoController */
/* @var $model Cargo */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'CAR_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'ARE_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'CAR_NOMBRE',array('maxlength'=>200)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
