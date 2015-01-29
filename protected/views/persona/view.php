
<?php
$this->breadcrumbs=array(
	'Personas'=>array('admin'),
	$model->PER_CORREL,
);?>
<?php echo BsHtml::linkButton('Volver', array('url'=>array('/persona/admin/'),'color' => BsHtml::BUTTON_COLOR_PRIMARY));?>
<?php echo BsHtml::pageHeader('Ver usuario',$model->nombreCompleto) ?>
<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		//'PER_CORREL',
		'CAR_CORREL',
		'EMP_NOMBRE',
		'PER_RUT',
		'PER_NOMBRE',
		'PER_PATERNO',
		'PER_MATERNO',
		'PER_EMAIL',
		'PER_TELEFONO',
		'PER_DIRECCION',
		'USUARIO',
	),
)); ?>
<?php
echo BsHtml::buttonGroup(array(
    array(
        'label' => 'Agregar Usuario',
        'url' => array('/usuario/crear/'.$model->PER_CORREL),
        'type' => BsHtml::BUTTON_TYPE_LINK,
        'color' => BsHtml::BUTTON_COLOR_PRIMARY,
        'visible'=>!$model->IFUSUARIO
    ),
        array(
        'label' => 'Editar Usuario',
        'url' => array('/persona/update/'.$model->PER_CORREL),
        'type' => BsHtml::BUTTON_TYPE_LINK,
        'color' => BsHtml::BUTTON_COLOR_PRIMARY,
    ),
    array(
        'label' => 'Cambiar Contraseña',
        'url' => array('/usuario/update/'.$model->PER_CORREL),
        'type' => BsHtml::BUTTON_TYPE_LINK,
        'color' => BsHtml::BUTTON_COLOR_WARNING,
        'visible'=>$model->IFUSUARIO
    ),
    array(
        'label' => 'Eliminar Usuario',
        'url' => array('/persona/deleted/'.$model->PER_CORREL),
        'type' => BsHtml::BUTTON_TYPE_LINK,
        'color' => BsHtml::BUTTON_COLOR_DANGER,
        'visible'=>$model->IFUSUARIO
    ),
    array(
        'label' => 'Quitar Usuario',
        'url' => array('/usuario/deleted/'.$model->PER_CORREL),
        'type' => BsHtml::BUTTON_TYPE_LINK,
        'color' => BsHtml::BUTTON_COLOR_DANGER,
        'visible'=>$model->IFUSUARIO
    ),
));
?>