<?php
/* @var $this EstadisticaController */

$this->breadcrumbs=array(
	'Estadistica'=>array('/estadistica'),
	'Estadisticas por empresa',
);
?>
<h1>Indicadores de Seguridad Por Empresa</h1>

<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_INLINE,
    'id' => 'user_form_inline',

    'enableClientValidation'=>true,
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>
<?php
echo $form->dropDownListControlGroup($model, 'EMPRESA',CHtml::listData(Empresa::model()->findAll(), 'EMP_CORREL', 'EMP_NOMBRE')
, array(
    'empty' => 'Seleccione la Empresa',
    'ajax' => array(
        'type'=>'POST',
        'url'=>array('estadistica/generarSegEmp'),
        'update'=>'#table-seg_emp',
        )
));?>
<?php
echo $form->dropDownListControlGroup($model, 'MES', array(
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
), array(
    'empty' => 'Elija el mes',
    'ajax' => array(
        'type'=>'POST',
        'url'=>array('estadistica/generarSegEmp'),
        'update'=>'#table-seg_emp',
        )
));?>
<?php
echo $form->dropDownListControlGroup($model, 'ANYO', array(
    '1',
    '2',
    '3',
    '4',
    '5'
), array(
    'empty' => 'Elija el año',
    'ajax' => array(
        'type'=>'POST',
        'url'=>array('estadistica/generarSegEmp'),
        'update'=>'#table-seg_emp',
        )
));?>
<?php
/*echo BsHtml::ajaxButton (
	"Generar",
	array('estadistica/generarSegEmp'), 
	array('update' => '#table-seg_emp',"type"=>'POST'), 
    array(
    'color' => BsHtml::BUTTON_COLOR_PRIMARY
));*/
?>
<?php $this->endWidget();?>

<div id="table-seg_emp"></div>