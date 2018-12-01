#!/usr/bin/env php
<?php
$data = file_get_contents('input');

$data = trim($data);
$data = explode("\n", $data);

$i = 0;

foreach ($data as $item) {
	$i += $item;
}

var_dump($i);
