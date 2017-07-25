<?php
/* @var $this CatController */
/* @var $data Cat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Name')); ?>:</b>
	<?php echo CHtml::encode($data->Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Color')); ?>:</b>
	<?php echo CHtml::encode($data->Color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fluff')); ?>:</b>
	<?php echo CHtml::encode($data->Fluff); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Price')); ?>:</b>
	<?php echo CHtml::encode($data->Price); ?>
	<br />


</div>