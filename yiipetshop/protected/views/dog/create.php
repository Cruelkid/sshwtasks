<?php
/* @var $this DogController */
/* @var $model Dog */

$this->breadcrumbs=array(
	'Dogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dog', 'url'=>array('index')),
	array('label'=>'Manage Dog', 'url'=>array('admin')),
);
?>

<h1>Create Dog</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>