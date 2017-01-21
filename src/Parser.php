<?php
namespace Mgd;

/**
 * Created by PhpStorm.
 * User: remi
 * Date: 12/29/16
 * Time: 9:43 AM
 */
class Parser
{
    public function do($response,$destination)
    {
        if(isset($response[0]))
        {
            foreach($response as &$item)
                $item = self::object($item,$destination);
        }
        else
            $response = self::object($response,$destination);
        return $response;
    }

    public function object($arraySource, $destination) {
        if(!isset($arraySource)) return;
        $destination = new $destination();
        $destinationReflection = new \ReflectionObject($destination);
        foreach ($arraySource as $key => $value) {
            if ($destinationReflection->hasProperty($key)) {
                $propDest = $destinationReflection->getProperty($key);
                $propDest->setAccessible(true);
                if (is_array($value)) {
                    if(isset($value[0])) {
                        if (preg_match('/@var\s+([\w^\s]+)/', $propDest->getDocComment(), $matches)) {
                            list(, $type) = $matches;
                        }
                        foreach ($value as &$item)
                            $item = self::object($item, "\\Mgd\\Entity\\" . $type);
                    }
                    else{
                        if (preg_match('/@var\s+(\w+)/', $propDest->getDocComment(), $matches)) {
                            list(, $type) = $matches;
                        }
                        $value = self::object($value, "\\Mgd\\Entity\\" . $type);
                    }
                }
                $propDest->setValue($destination, $value);
            } else {
                $destination->$key = $value;
            }
        }
        return $destination;
    }
}