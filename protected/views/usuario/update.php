<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
?>

<?php
$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->PER_CORREL=>array('view','id'=>$model->PER_CORREL),
	'Update',
);

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List Usuario', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create Usuario', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View Usuario', 'url'=>array('view', 'id'=>$model->PER_CORREL)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<?php echo BsHtml::pageHeader('Update','Usuario '.$model->PER_CORREL) ?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>