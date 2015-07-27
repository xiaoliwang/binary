<?php
require_once('../src/php/Basics.php');
use tomcao\php\binary as binary;
class BasicsTest extends PHPUnit_Framework_TestCase{
	
	//基础数据提供
	private $basicBinaryDatas = [0b1001110, 0, -4];
	
	/**
	 * @dataProvider binarydataProvider1
	 */
	public function testTurnOffTheRightmostOne($num, $expected){
		$basics = new binary\Basics;
		$returnNum = $basics->turnOffTheRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider2
	 */
	public function testTurnOnTheRightmostZero($num, $expected){
		$basics = new binary\Basics;
		$returnNum = $basics->turnOnTheRightmostZero($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	public function binarydataProvider1(){
		$expects = [0b1001100, 0, -8];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider2(){
		$expects = [0b1001111, 1, -3];
		$this->unionArray($expects);
		return $expects;
	}
	
	//打印二进制文件
	public function decbinln($n){
		echo decbin($n)."\n";
	}
	
	//合并数组
	public function unionArray(&$expects){
		foreach ($expects as $key => &$value){
			$value = [$this->basicBinaryDatas[$key], $value];
		}
		unset($value);
		return $expects;
	}
}