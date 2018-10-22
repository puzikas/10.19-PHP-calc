<?php

function getFeel($t) {
	if ($t > 30) {
		return "karsta";
	} else if ($t > 15) {
		return "silta";
	} else if ($t >= 5 && $t <= 14) {
		return "vesu";
	}
}