<?php
class lib {

	function a($data) {
		$i = 0;

		foreach ($data as $item) {
			$i += $item;
		}

		return $i;
	}

	function b($data) {
		$i = 0;
		$list = [$i => 1];

		while (true) {
			foreach ($data as $item) {
				$i += $item;

				if ($list[$i] ?? 0 === 1) {
					return $i;
				}
				$list[$i] = 1;
			}
		}
	}
}
