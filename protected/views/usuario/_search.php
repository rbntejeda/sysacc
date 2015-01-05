<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form BSActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <?php echo $form->textFieldControlGroup($model,'PER_CORREL',array('maxlength'=>10)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_PASSWORD',array('maxlength'=>200)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_ESTADO',array('maxlength'=>9)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_ROLE',array('maxlength'=>11)); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_END'); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_NEW'); ?>
    <?php echo $form->textFieldControlGroup($model,'USU_TIPO',array('maxlength'=>11)); ?>

    <div class="form-actions">
        <?php echo BsHtml::submitButton('Search',  array('color' => BsHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

<?php $this->endWidget(); ?>
