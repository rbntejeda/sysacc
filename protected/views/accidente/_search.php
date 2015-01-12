<?php
/* @var $this AccidenteController */
/* @var $model Accidente */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'ACC_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'PLA_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'CAR_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textAreaControlGroup($model,'ACC_DESCRICPION',array('rows'=>6)); ?>
    <?php echo $form->textAreaControlGroup($model,'ACC_SITIO',array('rows'=>6)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_FECHA'); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_PARAFECT',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_TIPO',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_AGENTE',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_ACCION',array('maxlength'=>0)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_CONSEC',array('maxlength'=>0)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
