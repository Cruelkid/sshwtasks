<?php
/* @var $this HamsterController */
/* @var $model Hamster */

$this->breadcrumbs=array(
	'Hamsters'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Hamster', 'url'=>array('index')),
	array('label'=>'Create Hamster', 'url'=>array('create')),
	array('label'=>'Update Hamster', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Hamster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Hamster', 'url'=>array('admin')),
);
?>

<h1>View Hamster #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'Color',
		'Price',
	),
)); ?>
