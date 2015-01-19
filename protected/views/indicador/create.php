<?php
/* @var $this IndicadorController */
/* @var $model Indicador */
?>
<?php
$this->breadcrumbs=array(
	'Indicadores',
	'Agregar tasa de accidentes'
);?>

<div class="col-md-6 col-md-offset-3">
<?php echo BsHtml::pageHeader('Agregar','Tasa de Accidentes') ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>