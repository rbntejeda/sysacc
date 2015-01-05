<?php
/* @var $this CargoController */
/* @var $data Cargo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAR_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CAR_CORREL),array('view','id'=>$data->CAR_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARE_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->ARE_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CAR_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->CAR_NOMBRE); ?>
	<br />


</div>