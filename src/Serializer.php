<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/23/17
 * Time: 10:15 AM
 */

namespace Mgd;


class Serializer
{
    public function serialize($object)
    {
        $reflectionClass = new \ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            if(!is_array($property->getValue($object)))
                $array[$property->getName()] = $property->getValue($object);
            $property->setAccessible(false);
        }
        return $array;
    }
}