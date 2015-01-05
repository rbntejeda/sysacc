<?php
/* @var $this AreaController */
/* @var $data Area */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARE_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ARE_CORREL),array('view','id'=>$data->ARE_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARE_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->ARE_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ARE_TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->ARE_TIPO); ?>
	<br />


</div>