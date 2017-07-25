<?php
/* @var $this HamsterController */
/* @var $model Hamster */

$this->breadcrumbs=array(
	'Hamsters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Hamster', 'url'=>array('index')),
	array('label'=>'Manage Hamster', 'url'=>array('admin')),
);
?>

<h1>Create Hamster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>