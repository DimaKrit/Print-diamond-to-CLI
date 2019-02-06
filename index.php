<?php

const NUMBER_OF_SPACES = 3;
const NUMBER_OF_lINE = PHP_EOL . PHP_EOL;
const OUTPUT_CHARACTER = '*';

if (!isset($argv[1])) {
	echo 'Enter the required integer';
	exit(1);
}

$height = $argv[1];

for ($y = 1; $y <= $height; $y++) {

	echo str_repeat(str_pad('', NUMBER_OF_SPACES), $height - $y);
	echo str_repeat(str_pad(OUTPUT_CHARACTER, NUMBER_OF_SPACES), $y * 2 - 1) . NUMBER_OF_lINE;
}

for ($y = $height - 1; 1 <= $y; $y--) {

	echo str_repeat(str_pad('', NUMBER_OF_SPACES), $height - $y);
	echo str_repeat(str_pad(OUTPUT_CHARACTER, NUMBER_OF_SPACES), $y * 2 - 1) . NUMBER_OF_lINE;

}



