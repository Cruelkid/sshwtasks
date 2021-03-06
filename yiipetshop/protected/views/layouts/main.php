<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',[
			'items'=>array(
				// ['label'=>'Home', 'url'=>['/site/index']],
				// ['label'=>'Petshop', 'url'=>['/Petshop']],
				// ['label'=>'About', 'url'=>['/site/page', 'view'=>'about']],
				// ['label'=>'Contact', 'url'=>['/site/contact']],
				// ['label'=>'Login', 'url'=>['/site/login'], 'visible'=>Yii::app()->user->isGuest],
				// ['label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>['/site/logout'], 'visible'=>!Yii::app()->user->isGuest]
				['label'=>'Home', 'url'=>['/petshop/index']],
				['label'=>'Cats', 'url'=>['/petshop/cats']],
				['label'=>'White', 'url'=>['/petshop/white']],
				['label'=>'Fluffy', 'url'=>['/petshop/fluffy']],
				['label'=>'Average', 'url'=>['/petshop/avg']]

			),
		]); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> YOBA Corporation.<br/>
		by Cruelkid.<br/>
		All Rights Reserved.<br/>
		<!-- <?php echo Yii::powered(); ?> -->
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
