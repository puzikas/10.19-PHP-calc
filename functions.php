<?php

function shipping($cp) {
	if ($cp < 40) {
		return 10;
	} else {
		return 0;
	}
}

function margin($cp) {
	if ($cp < 100) {
		return $cp * 0.3;
	} else {
		return $cp * 0.2;
	}
}

function vat($cp) {
	return ($cp + shipping($cp) + margin($cp)) * 0.21;
}

function retail($cp) {
	return $cp + shipping($cp) + margin($cp) + vat($cp);
}

function coef($cp) {
	return round(10 * ($cp + margin($cp) + shipping($cp)) / ($cp + shipping($cp))) / 10;
}
