#!/usr/bin/env php
<?php

$data = file_get_contents('day01.txt');

$data = trim($data);
$data = explode("\n", $data);

$i = 0;

foreach ($data as $item) {
	$i += $item;
}

var_dump($i);
