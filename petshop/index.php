<?php
require_once 'test.php';

$arr = $_SESSION['pets'];

// _d($arr);

$keys = [];
$values = [];

foreach ($arr as $pet) {
	foreach ($pet as $key => $value) {
		if ($key != 'voice') {
			array_push($keys, $key);
			array_push($values, $value);	
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
					<?php if ($key != 'voice'):?>
						<td rowspan="2"><?=$key?><br/><?=$value?></td>
					<?php endif;?>
				<?php endforeach;?>
			</tr>
		</table>
	<?php endforeach;?>
</body>
</html>
