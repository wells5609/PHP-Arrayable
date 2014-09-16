PHP-Arrayable
=============

Interface and function for standardized object-to-array conversion.

 * __Version: 0.1-beta__
 * __Requires: PHP 5.2+__
 * __Dependencies: none__


##Interface `Arrayable`

Contract for an object that can return its data as an array.

####Methods

 * `Array` __`toArray()`__ - Returns a representation of the object as an associative array.


##Function `object_to_array()`

Generic SPL-like function for converting objects to arrays.

####Signature

`Array` __`object_to_array(object $object)`__
