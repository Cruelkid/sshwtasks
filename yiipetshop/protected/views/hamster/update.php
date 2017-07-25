<?php
/* @var $this HamsterController */
/* @var $model Hamster */

$this->breadcrumbs=array(
	'Hamsters'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Hamster', 'url'=>array('index')),
	array('label'=>'Create Hamster', 'url'=>array('create')),
	array('label'=>'View Hamster', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Hamster', 'url'=>array('admin')),
);
?>

<h1>Update Hamster <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>