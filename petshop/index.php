<?php
require_once 'classes/petshop.php';
require_once 'classes/pet.php';
require_once 'models/cat.php';
require_once 'models/dog.php';
require_once 'models/hamster.php';

$ps = new PetShop();

$ps->getDataFromFile();

$arr = $ps->pets;
$keys = [];
$values = [];

foreach ($arr as $pet) {
	foreach ($pet as $key => $value) {
		if ($key != 'voice' && $key != 'fluff') {
			$keys += [$key];
			$values += [$value];
			// array_push($values, $value);	
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PetShop</title>
	<style type="text/css">
		table, tr, td {
		   border: 1px solid black;
		}
	</style>
</head>
<body>
	<?php foreach ($arr as $pets):?>
		<table style="">
			<tr>
				<?php foreach ($pets as $key => $value):?>
					<?php if ($key != 'voice' && $key != 'fluff'):?>
						<td rowspan="2"><?=$key?><br/><?=$value?></td>
					<?php endif;?>
				<?php endforeach;?>
			</tr>
		</table>
	<?php endforeach;?>
</body>
</html>
