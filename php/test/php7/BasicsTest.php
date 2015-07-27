<?php
require_once('../src/php7/Basics.php');
use tomcao\php7\binary as binary;
class BasicsTest extends PHPUnit_Framework_TestCase{
	
	//基础数据提供
	private $basicBinaryDatas = [0b1001110, 0b10010111, 0, -4, -5];
	
	/**
	 * @dataProvider binarydataProvider1
	 */
	public function testTurnOffTheRightmostOne(int $num, int $expected){
		$basics = new binary\Basics;
		$returnNum = $basics->turnOffTheRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider2
	 */
	public function testTurnOnTheRightmostZero(int $num, int $expected){
		$basics = new binary\Basics;
		$returnNum = $basics->turnOnTheRightmostZero($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider3
	 */
	public function testTurnOffTrailingOne(int $num, int $expected){
		$basics = new binary\Basics;
		$returnNum = $basics->turnOffTrailingOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	public function binarydataProvider1(): array{
		$expects = [0b1001100, 0b10010110, 0, -8, -6];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider2(): array{
		$expects = [0b1001111, 0b10011111, 1, -3, -1];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider3(): array{
		$expects = [0b1001110, 0b10010000, 0, -4, -8];
		$this->unionArray($expects);
		return $expects;
	}
	
	//打印二进制文件
	public function decbinln(int $n){
		echo decbin($n)."\n";
	}
	
	//合并数组
	public function unionArray(array &$expects): array{
		foreach ($expects as $key => &$value){
			$value = [$this->basicBinaryDatas[$key], $value];
		}
		unset($value);
		return $expects;
	}
}
