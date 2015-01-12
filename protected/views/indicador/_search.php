<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'IND_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'IND_ANYO',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'IND_MES',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'IND_CTP',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'IND_HHMES',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'IND_DIASPERDIDOS',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'IND_DOTACION',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'IND_PRODUCCION',array('maxlength'=>10)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
