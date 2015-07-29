<?php
declare(strict_types=1);
/**
 * PHP binary basic
 * @category PHP7
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
	 * to turn off the rightmost 1-bit in a word, producing 0 if 0
	 * 
	 * @todo This can be used to determine if unsigned integer is power of 2 or is 0:
	 * 		 apply the formula followed by a 0-test on the result;
	 * @param int $n
	 * @return int
	 */
	public function turnOffTheRightmostOne(int $n): int{
		return $n & ($n - 1);
	}
	
	/**
	 * to turn on the rightmost 0-bit in a word, producing all 1's if 0
	 * 
	 * @param int $n
	 * @param int 
	 */
	public function turnOnTheRightmostZero(int $n): int{
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
	public function turnOffTrailingOnes(int $n): int{
		return $n & ($n + 1);
	}
	
	/**
	 * to turn on the trailing 0's in a word, x if none
	 * 
	 * @param int $n
	 * @return int
	 */
	public function turnOnTrailingZeros(int $n): int{
		return $n | ($n - 1);
	}
	
	/**
	 * to create a word with a single 1-bit at the position of the rightmost 0-bit in x, producing 1 if 0
	 * 
	 * @param int $n
	 * @return int
	 */
	public function createTheRightmostSingleOne(int $n): int{
		return ~$n & ($n + 1);
	}
	
	/**
	 * to create a word with a single 0-bit at the position of the rightmost 1-bit in x, producing all 0 if 0
	 *
	 * @param int $n
	 * @return int
	 */
	public function createTheRightmostSingleZero(int $n): int{
		return ~$n | ($n - 1);
	}
	
	/**
	 * to create a word with 1's at the positions of the trailing 0's in x, and 0's elsewhere, producing -1 if 0
	 * has some instruction-level parallelism
	 * 
	 * @param int $n
	 * @return int
	 */
	public function createTrailingZeros1(int $n): int{
		return ~$n & ($n - 1);
	}
	
	/**
	 * to create a word with 1's at the positions of the trailing 0's in x, and 0's elsewhere, producing -1 if 0
	 * 
	 * @param int $n
	 * @return int
	 */
	public function createTrailingZeros2(int $n): int{
		return ~($n | -$n);
	}
	
	/**
	 * to create a word with 1's at the positions of the trailing 0's in x, and 0's elsewhere, producing -1 if 0
	 * 
	 * @param int $n
	 * @return int
	 */
	public function createTrailingZeros3(int $n): int{
		return ($n & -$n) - 1;
	}
	
	/**
	 * to create a word with 0's at the positions of the trailing 1's in x, and 0's elsewhere, producing all 1's if 0
	 * 
	 * @param int $n
	 * @return int
	 */
	public function createTrailingOnes(int $n): int{
		return ~$n | ($n + 1);
	}
	
	/**
	 * to isolate the rightmost 1 bit,producing 0 if 0
	 * 
	 * @param int $n
	 * @return int
	 */
	public function isolateTheRightmostOne(int $n): int{
		return $n & (-$n);
	}
	
	/**
	 * to create a word with 1's at the positions of the rightmost 1-bit and the trailing 0's in x,producing all 1's if 0
	 * 
	 * @param int $n
	 * @return int
	 */
	public function createTrailingOnesWithRightmostOne(int $n): int{
		return $n ^ ($n - 1);
	}
	
	/**
	 * to create a word with 1's at the positions of the rightmost 0-bit and the trailing 1's in x,producing 1 if 0
	 * 
	 * @param int $n
	 * @return int
	 */
	public function createTrailingOnesWithRightmostZero(int $n): int{
		return $n ^ ($n + 1);
	}
	
	/**
	 * to turn off the rightmost contiguous string of 1's
	 * 
	 * @todo These can be used to determine if a nonnegative integer is of the form 2^j-2^k for sound j>=k>=0
	 * 		 apply the formula by a 0-test on the result
	 * @param int $n
	 * @return int
	 */
	public function turnOffTheRightmostContiguousOnes1(int $n): int{
		return ((($n | ($n - 1)) + 1) & $n);
	}
	
	/**
	 * to turn off the rightmost contiguous string of 1's
	 *
	 * @todo These can be used to determine if a nonnegative integer is of the form 2^j-2^k for sound j>=k>=0
	 * 		 apply the formula by a 0-test on the result
	 * @param int $n
	 * @return int
	 */
	public function turnOffTheRightmostContiguousOnes2(int $n): int{
		return (($n & -$n) + $n) & $n;
	}
}
