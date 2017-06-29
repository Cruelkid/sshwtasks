<?php

	function chess($w, $h, $s) {
		
		$res = '';
		
		if($w < 0 || $h < 0 || $s == ' ') {
			return "status: failed, reason: invalid input";
		} else {
			for($i = 0; $i < $h; $i++) {
				for ($j = 0; $j < $w; $j++) { 
					if($i % 2 == 0) {
						$res = $res . $s . "&nbsp";
					} else {
						$res = $res . "&nbsp" . $s;
					}
				}
					$res = $res . "</br>";
			}
		}

		return $res;

	}

?>