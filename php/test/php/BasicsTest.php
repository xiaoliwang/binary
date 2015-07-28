<?php
require_once('../src/php/Basics.php');
use tomcao\php\binary as binary;
class BasicsTest extends PHPUnit_Framework_TestCase{
	
	//基础数据提供
	private $basicBinaryDatas = [0b01001110, 0b10010111, 0, -4, -5];
	protected static $basics;
	
	public static function setUpBeforeClass(){
		self::$basics = new binary\Basics;
	}
	
	public static function tearDownClass(){
		self::$basics = null;
	}
	
	/**
	 * @dataProvider binarydataProvider1
	 */
	public function testTurnOffTheRightmostOne($num, $expected){
		$returnNum = self::$basics->turnOffTheRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider2
	 */
	public function testTurnOnTheRightmostZero($num, $expected){
		$returnNum = self::$basics->turnOnTheRightmostZero($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider3
	 */
	public function testTurnOffTrailingOnes($num, $expected){
		$returnNum = self::$basics->turnOffTrailingOnes($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider4
	 */
	public function testTurnOnTrailingZeros($num, $expected){
		$returnNum = self::$basics->turnOnTrailingZeros($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider5
	 */
	public function testCreateTheRightmostSingleOne($num, $expected){
		$returnNum = self::$basics->createTheRightmostSingleOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider6
	 */
	public function testCreateTheRightmostSingleZero($num, $expected){
		$returnNum = self::$basics->createTheRightmostSingleZero($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	///////////////////////////数据///////////////////////
public function binarydataProvider1(){
		$expects = [0b1001100, 0b10010110, 0, -8, -6];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider2(){
		$expects = [0b1001111, 0b10011111, 1, -3, -1];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider3(){
		$expects = [0b1001110, 0b10010000, 0, -4, -8];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider4(){
		$expects = [0b1001111, 0b10010111, -1, -1, -5];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider5(){
		$expects = [1, 0b1000, 1, 1, 4];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider6(){
		$expects = [-3, -2, -1, -5, -2];
		$this->unionArray($expects);
		return $expects;
	}
	
	//////////////////////////////公共方法//////////////////////
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