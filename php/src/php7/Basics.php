<?php
declare(strict_types=1);
/**
 * PHP binary basic
 * @category PHP
 * @package tomcao\php7\binary
 * @auth TomCao <jiepengthegreat@126.com>
 * @copyright 2015 TomCao
 * @license MIT
 * @version 1.0.0
 * @link https://github.com/xiaoliwang/binary
 */
namespace tomcao\php7\binary;
/**
 * @method int turnOffTheRightmostOne(int $n)
 */
class Basics{	
	/**
	 * @todo to turn off the rightmost 1-bit in a word
	 * @param int $n
	 * @return int $n
	 */
	public function turnOffTheRightmostOne(int $n): int{
		return $n &= ($n - 1);
	}
	
	/**
	 * @todo to turn on the rightmost 0-bit in a word
	 * @param int $n
	 * @param int $n
	 */
	public function turnOnTheRightmostZero(int $n): int{
		return $n |= ($n + 1);
	}
	
	/**
	 * @todo to turn off the trailing 1's in a word
	 * @param int $n
	 * @param int $n
	 */
	public function turnOffTrailingOne(int $n): int{
		return $n &= ($n + 1);
	}
}
