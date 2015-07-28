<?php
require_once('../src/php7/Basics.php');
use tomcao\php7\binary as binary;
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
	public function testTurnOffTheRightmostOne(int $num, int $expected){
		$returnNum = self::$basics->turnOffTheRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider2
	 */
	public function testTurnOnTheRightmostZero(int $num, int $expected){
		$returnNum = self::$basics->turnOnTheRightmostZero($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider3
	 */
	public function testTurnOffTrailingOnes(int $num, int $expected){
		$returnNum = self::$basics->turnOffTrailingOnes($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider4
	 */
	public function testTurnOnTrailingZeros(int $num, int $expected){
		$returnNum = self::$basics->turnOnTrailingZeros($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider5
	 */
	public function testCreateTheRightmostSingleOne(int $num, int $expected){
		$returnNum = self::$basics->createTheRightmostSingleOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider6
	 */
	public function testCreateTheRightmostSingleZero(int $num, int $expected){
		$returnNum = self::$basics->createTheRightmostSingleZero($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider7
	 */
	public function testCreateTrailingZeros1(int $num, int $expected){
		$returnNum = self::$basics->createTrailingZeros1($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider7
	 */
	public function testCreateTrailingZeros2(int $num, int $expected){
		$returnNum = self::$basics->createTrailingZeros2($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider7
	 */
	public function testCreateTrailingZeros3(int $num, int $expected){
		$returnNum = self::$basics->createTrailingZeros3($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider8
	 */
	public function testCreateTrailingOnes(int $num, int $expected){
		$returnNum = self::$basics->createTrailingOnes($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider9
	 */
	public function testIsolateTheRightmostOne(int $num, int $expected){
		$returnNum = self::$basics->isolateTheRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	/**
	 * @dataProvider binarydataProvider10
	 */
	public function testCreateTrailingOnesWithRightmostOne(int $num, int $expected){
		$returnNum = self::$basics->createTrailingOnesWithRightmostOne($num);
		$this->assertEquals($expected, $returnNum);
	}
	
	///////////////////////////数据///////////////////////
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
	
	public function binarydataProvider4(): array{
		$expects = [0b1001111, 0b10010111, -1, -1, -5];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider5(): array{
		$expects = [1, 0b1000, 1, 1, 4];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider6(): array{
		$expects = [-3, -2, -1, -5, -2];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider7(): array{
		$expects = [1, 0, -1, 3, 0];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider8(): array{
		$expects = [-1, -8, -1, -1, -4];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider9(): array{
		$expects = [2, 1, 0, 4, 1];
		$this->unionArray($expects);
		return $expects;
	}
	
	public function binarydataProvider10(): array{
		$expects = [3, 1, -1, 7, 1];
		$this->unionArray($expects);
		return $expects;
	}
	
	//////////////////////////////公共方法//////////////////////
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
