<?php
/* @var $this AccidenteController */
/* @var $data Accidente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ACC_CORREL),array('view','id'=>$data->ACC_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PLA_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAR_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->CAR_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_DESCRICPION')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_DESCRICPION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_SITIO')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_SITIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_PARAFECT')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_PARAFECT); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_TIPO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_AGENTE')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_AGENTE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_ACCION')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_ACCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ACC_CONSEC')); ?>:</b>
	<?php echo CHtml::encode($data->ACC_CONSEC); ?>
	<br />

	*/ ?>

</div>