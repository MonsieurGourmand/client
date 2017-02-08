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
    public function serialize($element)
    {
        if(is_array($element))
        {
            foreach($element as &$item)
                $element = self::object($element);
        }
        else
            $element = self::object($element);
        return $element;
    }

    public function object($object) {
        $reflectionClass = new \ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($object);
            if(is_array($value))
            {
                foreach ($value as &$element) {
                    $element = self::object($element);
                }
            }
            elseif(is_object($value))
                $value = self::object($value);
            $array[$property->getName()] = $value;
            $property->setAccessible(false);
        }
        return $array;
    }    
}