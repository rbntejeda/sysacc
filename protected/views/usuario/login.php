<div class="row">
    <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
            <center>
            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo_certificado_corma.png" width=178></img>
                <h2 class="panel-title">ACCIDENTABILIDAD SSO- CORMA</h2>
            </center>
                
            </div>
            <div class="panel-body">
                <?php
                    $form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
                        //'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
                        'enableAjaxValidation' => true,
                        'id' => 'user_form',
                        'htmlOptions' => array(
                            'class' => 'Login-Form'
                        )
                    ));
                ?>
                <fieldset>
                    <?php echo $form->textFieldControlGroup($model, 'username',array('required'=>true));        ?>
                    <?php echo $form->passwordFieldControlGroup($model, 'password',array('required'=>true));    ?>
                    <?php echo $form->checkBoxControlGroup($model, 'rememberMe');?>
                    <?php echo BsHtml::submitButton('Ingresar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY));?>
                </fieldset>
                <?php $this->endWidget();?>
            </div>
        </div>
    </div>
</div>

