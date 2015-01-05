<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EMP_CORREL),array('view','id'=>$data->EMP_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_ESTADO); ?>
	<br />


</div>