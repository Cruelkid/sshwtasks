<?php
/* @var $this PetshopController */
// use yii\helpers\Url;

$this->breadcrumbs=array(
	'Petshop',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<a href="<?= Url::to(['petshop/cats']) ?>"></a>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
<div id="mainmenu">
	<?php $this->widget('zii.widgets.CMenu',[
		'items'=>array(
			// ['label'=>'Home', 'url'=>['/site/index']],
			// ['label'=>'Petshop', 'url'=>['/Petshop']],
			// ['label'=>'About', 'url'=>['/site/page', 'view'=>'about']],
			['label'=>'Contact', 'url'=>['/petshop/contact']],
			// ['label'=>'Login', 'url'=>['/site/login'], 'visible'=>Yii::app()->user->isGuest],
			// ['label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>['/site/logout'], 'visible'=>!Yii::app()->user->isGuest]
		),
	]); ?>
</div><!-- mainmenu -->
<?php if(isset($this->breadcrumbs)):?>
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->
<?php endif?>

<?php /*echo $content; */?>
