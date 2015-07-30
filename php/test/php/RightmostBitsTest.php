<?php
require_once('../src/php/RightmostBits.php');
use tomcao\php\binary\basic as basic;
class RightmostBitsTest extends PHPUnit_Framework_TestCase{
	
	//基础数据提供
	private $basicBinaryDatas = [0b01001110, 0b10010111, 0, -4, -5];
	protected static $basics;
	
	public static function setUpBeforeClass(){
		self::$basics = new basic\RightmostBits;
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
	
	/**
	 * @dataProvider binarydataProvider7
	 */
	public function testCreateTrailingZeros1($num, $expected){
		$returnNum = self::$basics->createTrailingZeros1($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider7
	 */
	public function testCreateTrailingZeros2($num, $expected){
		$returnNum = self::$basics->createTrailingZeros2($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider7
	 */
	public function testCreateTrailingZeros3($num, $expected){
		$returnNum = self::$basics->createTrailingZeros3($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider8
	 */
	public function testCreateTrailingOnes($num, $expected){
		$returnNum = self::$basics->createTrailingOnes($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider9
	 */
	public function testIsolateTheRightmostOne($num, $expected){
		$returnNum = self::$basics->isolateTheRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider10
	 */
	public function testCreateTrailingOnesWithRightmostOne($num, $expected){
		$returnNum = self::$basics->createTrailingOnesWithRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider11
	 */
	public function testCreateTrailingOnesWithRightmostZero($num, $expected){
		$returnNum = self::$basics->createTrailingOnesWithRightmostZero($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider12
	 */
	public function testTurnOffTheRightmostContiguousOnes1($num, $expected){
		$returnNum = self::$basics->turnOffTheRightmostContiguousOnes1($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider12
	 */
	public function testTurnOffTheRightmostContiguousOnes2($num, $expected){
		$returnNum = self::$basics->turnOffTheRightmostContiguousOnes2($num);
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
	
	public function binarydataProvider7(){
		$expects = [1, 0, -1, 3, 0];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider8(){
		$expects = [-1, -8, -1, -1, -4];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider9(){
		$expects = [2, 1, 0, 4, 1];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider10(){
		$expects = [3, 1, -1, 7, 1];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider11(){
		$expects = [1, 15, 1, 1, 7];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider12(){
		$expects = [64, 144, 0, 0, -8];
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