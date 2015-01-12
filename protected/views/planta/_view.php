<?php
/* @var $this PlantaController */
/* @var $data Planta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PLA_CORREL),array('view','id'=>$data->PLA_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->PLA_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PLA_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->PLA_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->PLA_TELEFONO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->PLA_ESTADO); ?>
	<br />

	*/ ?>

</div>