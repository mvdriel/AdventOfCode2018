<?php
require 'lib.php';

use PHPUnit\Framework\TestCase;

class libTest extends TestCase {

	/**
	 * @dataProvider aProvider
	 */
	function testA($data, $expected) {
		$data = explode(',', $data);
		$actual = lib::a($data);
		$this->assertEquals($expected, $actual);
	}

	function aProvider() {
		return [
			['+1, +1, +1', 3],
			['+1, +1, -2', 0],
			['-1, -2, -3', -6]
		];
	}

	/**
	 * @dataProvider bProvider
	 */
	function testB($data, $expected) {
		$data = explode(',', $data);
		$actual = lib::b($data);
		$this->assertEquals($expected, $actual);
	}

	function bProvider() {
		return [
			['+1, -1', 0],
			['+3, +3, +4, -2, -4', 10],
			['-6, +3, +8, +5, -6', 5],
			['+7, +7, -2, -7, -4', 14]
		];
	}

}
