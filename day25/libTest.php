<?php
use PHPUnit\Framework\TestCase;

class libTest extends TestCase {

	function aTest($data) {
		ob_start();

		require 'part1.php';

		$actual = ob_get_contents();

		ob_end_clean();

		$actual = implode("\n", array_slice(explode("\n", $actual), -1));

		return $actual;
	}

	/**
	 * @dataProvider aProvider
	 */
	function testA($data, $expected) {
		$actual = self::aTest(implode("\n", $data));
		$this->assertEquals($expected, $actual);
	}

	function aProvider() {
		return [
			[
				[
					' 0,0,0,0',
					' 3,0,0,0',
					' 0,3,0,0',
					' 0,0,3,0',
					' 0,0,0,3',
					' 0,0,0,6',
					' 9,0,0,0',
					'12,0,0,0'
				],
				2
			],
			[
				[
					'-1,2,2,0',
					'0,0,2,-2',
					'0,0,0,-2',
					'-1,2,0,0',
					'-2,-2,-2,2',
					'3,0,2,-1',
					'-1,3,2,2',
					'-1,0,-1,0',
					'0,2,1,-2',
					'3,0,0,0'
				],
				4
			],
			[
				[
					'1,-1,0,1',
					'2,0,-1,0',
					'3,2,-1,0',
					'0,0,3,1',
					'0,0,-1,-1',
					'2,3,-2,0',
					'-2,2,0,0',
					'2,-2,0,-1',
					'1,-1,0,-1',
					'3,2,0,2'
				],
				3
			],
			[
				[
					'1,-1,-1,-2',
					'-2,-2,0,1',
					'0,2,1,3',
					'-2,3,-2,1',
					'0,2,3,-2',
					'-1,-1,1,-2',
					'0,-2,-1,0',
					'-2,2,3,-1',
					'1,2,2,0',
					'-1,-2,0,-2'
				],
				8
			]
		];
	}

}
