<?php
/* @var $this PersonaController */
/* @var $data Persona */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PER_CORREL),array('view','id'=>$data->PER_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAR_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->CAR_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EMP_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->EMP_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->PER_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->PER_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_PATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->PER_PATERNO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_MATERNO')); ?>:</b>
	<?php echo CHtml::encode($data->PER_MATERNO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_EMAIL')); ?>:</b>
	<?php echo CHtml::encode($data->PER_EMAIL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->PER_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->PER_DIRECCION); ?>
	<br />

	*/ ?>

</div>