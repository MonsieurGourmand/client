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

        $depth = 0;
        if(is_array($element))
        {
            foreach($element as &$item)
                $element = self::object($element,$depth);
        }
        else
        {
            $element = self::object($element,$depth);
        }
        return $element;
    }

    public function object($object,$depth) {
        if($depth > 2) return;
        $reflectionClass = new \ReflectionClass(get_class($object));
        $array = array();
        foreach ($reflectionClass->getProperties() as $property) {
            $property->setAccessible(true);
            $value = $property->getValue($object);
            if(is_array($value))
            {
                if(isset($value[0]))
                {
                    if(is_object($value[0]))
                    {
                        foreach ($value as &$element) {
                            $element = self::object($element,$depth + 1);
                        }
                    }
                }

            }
            elseif(is_object($value) && strpos(get_class($value),"Mgd") !== false)
                $value = self::object($value,$depth + 1);
            $array[$property->getName()] = $value;
            $property->setAccessible(false);
        }
        return $array;
    }
}