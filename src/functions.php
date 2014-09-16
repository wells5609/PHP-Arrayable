<?php
/**
 * @package wells5609/php-arrayable
 * @author wells5609
 * @license MIT
 * @version 0.1-beta
 */

if (! function_exists('object_to_array')) :
	
	/**
	 * Converts an object to an associative array.
	 *
	 * @since 0.1-beta
	 * 
	 * @param object $object An object to convert to an array.
	 *
	 * @return array An associative array of the object's data.
	 */
	function object_to_array($object) {
		
		if (method_exists($object, 'toArray')) {
			return $object->toArray();
		}
		
		if ($object instanceof Traversable) {
			return iterator_to_array($object);
		}
		
		// Only return accessible properties (don't use "(array)$object")
		return get_object_vars($object);
	}

endif;
