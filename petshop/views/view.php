<!DOCTYPE html>
<html>
<head>
	<title>PetShop</title>
	<link rel="stylesheet" type="text/css" href="css/view_style.css">
</head>
<body>
	<header class="header"><h1>Pet Shop</h1></header>
	<div class="links">
		<a href="index.php?func=cats">Get all cats</a>
		<p>Get <a href="index.php?func=wof&args=white">White</a> or <a href="index.php?func=wof&args=fluffy">fluffy</a></p>
		<p><a href="index.php?func=avg">Get average price</a></p>
		<a href="index.php">Clear</a>
	</div>
	<div class="result">
		<?php if (isset($result) && is_array($result)): ?>
			<?php foreach ($result as $pet):?>
				<?php foreach ($pet as $key => $value):?>
					<?=$key?>: <?=$value?><br/>
				<?php endforeach;?>
				<br/>
			<?php endforeach;?>
		<?php elseif (isset($result)): ?>
			<h3><?=$result?></h3>
		<?php endif; ?>
	</div>
	<footer class="footer">
		by Cruelkid<br/>
		<?=date("Y");?> &copy; YOBA corporation
	</footer>
</body>
</html>