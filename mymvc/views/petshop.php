<!DOCTYPE html>
<html>
<head>
	<title>PetShop</title>
	<link rel="stylesheet" type="text/css" href="css/view_style.css">
</head>
<body>
	<header class="header"><h1>Pet Shop</h1></header>
	<div class="links">
		<a href="petshop/index.php?func=cats">Get all cats</a>
		<p>Get <a href="petshop/index.php?func=wof&args=white">White</a> or <a href="petshop/index.php?func=wof&args=fluffy">fluffy</a></p>
		<p><a href="petshop/index.php?func=avg">Get average price</a></p>
		<a href="petshop/index.php">Clear</a>
		<a href="index.php">Home</a>
	</div>
	<div class="result">
		<?php if (isset($data) && is_array($data)): ?>
			<?php foreach ($data as $pet):?>
				<?php foreach ($pet as $key => $value):?>
					<?=$key?>: <?=$value?><br/>
				<?php endforeach;?>
				<br/>
			<?php endforeach;?>
		<?php elseif (isset($data)): ?>
			<h3><?=$data?></h3>
		<?php endif; ?>
	</div>
	<footer class="footer">
		by Cruelkid<br/>
		<?=date("Y");?> &copy; YOBA corporation
	</footer>
</body>
</html>