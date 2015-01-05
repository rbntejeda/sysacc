<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->EMP_CORREL,
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Empresa', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Empresa', 'url'=>array('create')),
	array('icon' => 'glyphicon glyphicon-edit','label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->EMP_CORREL)),
	array('icon' => 'glyphicon glyphicon-minus-sign','label'=>'Delete Empresa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EMP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('View','Empresa '.$model->EMP_CORREL) ?>

<?php $this->widget('zii.widgets.CDetailView',array(
	'htmlOptions' => array(
		'class' => 'table table-striped table-condensed table-hover',
	),
	'data'=>$model,
	'attributes'=>array(
		'EMP_CORREL',
		'COM_CORREL',
		'EMP_RUT',
		'EMP_NOMBRE',
		'EMP_DIRECCION',
		'EMP_TELEFONO',
		'EMP_ESTADO',
	),
)); ?>