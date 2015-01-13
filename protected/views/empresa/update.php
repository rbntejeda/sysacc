<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
?>

<?php
$this->breadcrumbs=array(
	'Empresas',
	$model->EMP_NOMBRE,
	'Actualizar',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Empresa', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Empresa', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Empresa', 'url'=>array('view', 'id'=>$model->EMP_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Actualizar','Empresa '.$model->EMP_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>