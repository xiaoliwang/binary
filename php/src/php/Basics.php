<?php
/**
 * PHP binary basic
 * @category PHP
 * @package tomcao\php\binary
 * @auth TomCao <jiepengthegreat@126.com>
 * @copyright 2015 TomCao
 * @license MIT
 * @version 1.0.0
 * @link https://github.com/xiaoliwang/binary
 */
namespace tomcao\php\binary;
class Basics{	
	/**
	 * to turn off the rightmost 1-bit in a word, producing 0 if 0
	 * 
	 * @todo This can be used to determine if unsigned integer is power of 2 or is 0:
	 * 		 apply the formula followed by a 0-test on the result;
	 * @param int $n
	 * @return int
	 */
	public function turnOffTheRightmostOne($n){
		return $n & ($n - 1);
	}
	
	/**
	 * to turn on the rightmost 0-bit in a word, producing all 1's if 0
	 * 
	 * @param int $n
	 * @param int 
	 */
	public function turnOnTheRightmostZero($n){
		return $n | ($n + 1);
	}
	
	/**
	 * to turn off the trailing 1's in a word, producing x if 0
	 * 
	 * @todo This can be used to determine if an unsigned integer is ofthe form 2^n-1, or all 1s:
	 * 		 apply the formula followed by a 0 test on the result.
	 * @param int $n
	 * @param int 
	 */
	public function turnOffTrailingOnes($n){
		return $n & ($n + 1);
	}
	
	/**
	 * to turn on the trailing 0's in a word, x if none
	 *
	 * @param int $n
	 * @return int
	 */
	public function turnOnTrailingZeros($n){
		return $n | ($n - 1);
	}
	
	/**
	 * to create a word with a single 1-bit at the position of the rightmost 0-bit in x, producing 1 if 0
	 *
	 * @param int $n
	 * @return int
	 */
	public function createTheRightmostSingleOne($n){
		return ~$n & ($n + 1);
	}
	
	/**
	 * to create a word with a single 0-bit at the position of the rightmost 1-bit in x, producing all 0 if 0
	 *
	 * @param int $n
	 * @return int
	 */
	public function createTheRightmostSingleZero($n){
		return ~$n | ($n - 1);
	}
}
