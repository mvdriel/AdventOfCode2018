#!/usr/bin/env php
<?php
$data = file_get_contents('input');

$data = trim($data);
$data = explode("\n", $data);

$i = 0;
$list = [$i];

while (true) {
	foreach ($data as $item) {
		$i += $item;

		if (in_array($i, $list, true)) {
			var_dump($i);
exit;
		}
		$list[] = $i;
	}
}
