<?php
/**
 * @package wells5609/php-arrayable
 * @author wells5609
 * @license MIT
 * @version 0.1-beta
 */

/**
 * Contract for an object that can return its data as an array.
 * 
 * @since 0.1-beta
 */
interface Arrayable
{

	/**
	 * Returns a representation of the object as a native PHP array.
	 *
	 * @since 0.1-beta
	 *
	 * @return array Associative array of object data.
	 */
	public function toArray();

}
