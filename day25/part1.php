#!/usr/bin/env php
<?php
$data = $data ?? file_get_contents('input');
$data = trim($data);
$data = explode("\n", $data);

$points = [];
foreach ($data as $line) {
	$points[] = array_map('intval', explode(',', trim($line)));
}

$count = 0;

$nodes = $newNodes = $taken = [];

while (count($points) > count($taken)) {
	$nodes = $newNodes;
	$newNodes = [];

	if (count($nodes) === 0) {
		foreach ($points as $key => $point) {
			if (($taken[$key] ?? false) === false ) {
				$taken[$key] = true;
				$nodes = [$point];
				$count++;
				break;
			}
		}
	}

	foreach ($points as $key => $point) {
		if (($taken[$key] ?? false) === false ) {
			foreach ($nodes as $node) {
				$distance = 0;
				for ($i = 0; $i < 4 ; $i++) {
					$distance += abs($point[$i] - $node[$i]);
				}

				if ($distance <= 3) {
					$newNodes[] = $point;
					$taken[$key] = true;
				}
			}
		}
	}
}

echo $count;
