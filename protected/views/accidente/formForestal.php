<?php
$this->breadcrumbs=array(
	'Accidentes',
	'Agregar',
);

//Funcionalidad de Calendario
    $cs        = Yii::app()->clientScript;
    $baseUrl = Yii::app()->request->baseUrl;
    $cs->registerCssFile($baseUrl.'/css/bootstrap-datetimepicker.min.css');
    $cs->registerScriptFile($baseUrl.'/js/moment.js', CClientScript::POS_END);
    $cs->registerScriptFile($baseUrl.'/js/bootstrap-datetimepicker.min.js', CClientScript::POS_END);
    $cs->registerScript('validarRut',"
        $(document).ready(function(){ 
            $('#Accidente_ACC_FECHA').datetimepicker({
                minDate:'1/1/1990',
                pickTime: false,
                language:'es'
            });
            $('#Accidente_ACC_HORA').datetimepicker({
                pickDate: false,
                language:'es', 
            });
            $('#Accidente_ACC_FECHA').data('DateTimePicker').setMaxDate(new moment().format('DD/MM/YYYY'));
        });
        ");

?>
<div class="col-md-6 col-md-offset-3">
<?php echo BsHtml::pageHeader('Ingresar','Accidente') ?>
<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'id'=>'accidente-form',
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableClientValidation'=>true,
)); ?>

    <?php echo BsHtml::emphasis('Los campos con '.BsHtml::abbr('*', 'El campo con * es obligatorio').' son requeridos.', array('color' => BsHtml::TEXT_COLOR_DANGER));?>
    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->dropDownListControlGroup($model,'PLA_CORREL',CHtml::listData(Planta::model()->findAll(), 'PLA_CORREL', 'PLA_NOMBRE'));?>
    <?php 
        $model2=new Area;
        if(isset($_POST['Area']))$model2->attributes=$_POST['Area'];
        echo $form->dropDownListControlGroup($model2,'ARE_CORREL',CHtml::listData(Area::model()->findAll("ARE_TIPO='FORESTAL'"), 'ARE_CORREL', 'ARE_NOMBRE'),
         array (
            'prompt'=>'Seleccione un Area',
            'ajax' => array(
                'type'=>'POST',
                'url'=>array('/accidente/CAR_CORREL'),
                'update'=>'#Accidente_CAR_CORREL',
                )
         ));
     ?>
    <?php echo $form->dropDownListControlGroup($model,'CAR_CORREL',CHtml::listData(($ARE_CORREL=$model2->ARE_CORREL!="")?Cargo::model()->findAll("ARE_CORREL=$ARE_CORREL"):Cargo::model()->findAll(), 'CAR_CORREL', 'CAR_NOMBRE'),array('prompt'=>'Seleccione un Cargo',));?>
    <?php echo $form->textFieldControlGroup($model,'ACC_RUT',array('maxlength'=>12)); ?>
    <?php echo $form->radioButtonListControlGroup($model, 'ACC_INCIDENTE', array(
        'TRAYECTO'=>'Accidente de Trabajo',
        'TRABAJO'=>'Accidente de Trayecto'
    ));?>
    
    <?php echo $form->textAreaControlGroup($model,'ACC_SITIO',array('rows'=>1)); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_FECHA'); ?>
    <?php echo $form->textFieldControlGroup($model,'ACC_HORA'); ?>
    <?php echo $form->dropDownListControlGroup($model,'ACC_PARAFECT',array('Cabeza','Cuello','Espalda','Extremidades Inferiores','Extremidades Superiores','Tronco','Todo el Cuerpo, Multiples Partes'),array('prompt'=>'Seleccione parte afectada',));?>
    <?php echo $form->dropDownListControlGroup($model,'ACC_TIPO',array('Conmocion y lesiones Internas','Dislocaciones, esguinces y torceduras','Envenenamientos e infecciones','Fractura de Huesos','Heridas y Lesiones superficiales','Otro tipo de lesion / lesion desconocida'),array('prompt'=>'Seleccione tipo de accidente',));?>
    <?php echo $form->dropDownListControlGroup($model,'ACC_AGENTE',array('Maquinarias y equipos','Herramientas con o sin Motor','Materiales que se trasladan','Materiales que se proyectan','Otros materiales u objetos','Humos, gases, o vapores en el aire','Superficies de trabajo al mismo nivel','Zonas de tránsito','Vehículos para transporte de personas','Vehículos para transporte de materiales','Otros agentes'),array('prompt'=>'Seleccione agente del accidente',));?>
    <?php echo $form->dropDownListControlGroup($model,'ACC_ACCION',array('Operar sin acreditación/Autorización','No señalizar o asegurar','Operar a una velocidad inadecuada','Poner fuera de servicio los dispositivos de seguridad','Usar equipo defectuoso','Usar el equipo incorrecto','No usar equipo de protección personal','Cargar productos incorrectamente','No cumplir procedimientos o normas establecidas','Levantar en forma incorrecta','Adoptar una posición o postura incorrecta','Efectuar mantención con el equipo funcionando','No estar atento','Trabajar bajo influencia de alcohol - drogas','Maniobras incorrectas al conducir','Transitar por áreas restringidas','Exceso de confianza','Otras'),array('prompt'=>'Seleccione la acción de ocurrencia del accidente',));?>
    <?php echo $form->dropDownListControlGroup($model,'ACC_COND',array('Resguardos o protección inadecuada','Falta de protecciones','Herramientas y/o  materiales en mal estado','Vehículos y/o máquinaria en mal estado','Herramientas y/o  materiales inadecuados','Vehículos y/o máquinaria inadecuada','Congestión de recursos (Equipos y/o personas)','Sistema de alarmas inadecuados','Peligros de incendios o explosiones','Orden y/o aseo deficiente','Exposición: gases, polvos, humos, vapores.','Ruido excesivo','Falla mecánica en vehículo / maquinaria / equipo','Iluminación y/o ventilación inadecuada','Infraestructura defectuosa','Falta de Equipos de Protección Personal','Condiciones ambientales adversas (viento, lluvia, etc.)','Otras: Visibilidad inadecuada','Otras: Superficie resbaladiza','Otras: Alto nivel de desecho en faena','Otras: Desprendimiento de piedras'),array('prompt'=>'Seleccione la condición del accidente',));?>
    <?php echo $form->dropDownListControlGroup($model,'ACC_CONSEC',array('Accidente Con Tiempo Perdido (CTP)','Accidente Sin Tiempo Perdido (STP)','Accidente Fatal (AF)'),array('prompt'=>'Seleccione la concecuencia del accidente',));?>
    <?php echo $form->textAreaControlGroup($model,'ACC_DESCRIPCION',array('rows'=>2)); ?>
    <?php echo BsHtml::formActions(array(BsHtml::submitButton('Añadir', array('color' => BsHtml::BUTTON_COLOR_PRIMARY))));?>

<?php $this->endWidget(); ?>
</div>