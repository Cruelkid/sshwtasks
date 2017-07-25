<?php
/* @var $this DogController */
/* @var $model Dog */

$this->breadcrumbs=array(
	'Dogs'=>array('index'),
	$model->Name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dog', 'url'=>array('index')),
	array('label'=>'Create Dog', 'url'=>array('create')),
	array('label'=>'View Dog', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Dog', 'url'=>array('admin')),
);
?>

<h1>Update Dog <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>