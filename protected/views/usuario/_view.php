<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('PER_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->PER_CORREL),array('view','id'=>$data->PER_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->USU_PASSWORD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->USU_ESTADO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_ROLE')); ?>:</b>
	<?php echo CHtml::encode($data->USU_ROLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_END')); ?>:</b>
	<?php echo CHtml::encode($data->USU_END); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_NEW')); ?>:</b>
	<?php echo CHtml::encode($data->USU_NEW); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USU_TIPO')); ?>:</b>
	<?php echo CHtml::encode($data->USU_TIPO); ?>
	<br />


</div>