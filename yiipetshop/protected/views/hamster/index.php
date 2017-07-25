<?php
/* @var $this HamsterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hamsters',
);

$this->menu=array(
	array('label'=>'Create Hamster', 'url'=>array('create')),
	array('label'=>'Manage Hamster', 'url'=>array('admin')),
);
?>

<h1>Hamsters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
