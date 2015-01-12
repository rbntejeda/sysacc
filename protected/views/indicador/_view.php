<?php
/* @var $this IndicadorController */
/* @var $data Indicador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IND_CORREL),array('view','id'=>$data->IND_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PLA_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->PLA_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_ANYO')); ?>:</b>
	<?php echo CHtml::encode($data->IND_ANYO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_MES')); ?>:</b>
	<?php echo CHtml::encode($data->IND_MES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_CTP')); ?>:</b>
	<?php echo CHtml::encode($data->IND_CTP); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_HHMES')); ?>:</b>
	<?php echo CHtml::encode($data->IND_HHMES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_DIASPERDIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->IND_DIASPERDIDOS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_DOTACION')); ?>:</b>
	<?php echo CHtml::encode($data->IND_DOTACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IND_PRODUCCION')); ?>:</b>
	<?php echo CHtml::encode($data->IND_PRODUCCION); ?>
	<br />

	*/ ?>

</div>