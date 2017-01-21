<?php
namespace OAuth2\GrantType;

use OAuth2\InvalidArgumentException;

/**
 * Apikey Parameters
 */
class Apikey implements IGrantType
{
    /**
     * Defines the Grant Type
     *
     * @var string  Defaults to 'apikey'.
     */
    const GRANT_TYPE = 'https://api.monsieurgourmand.com/grant/apikey';

    /**
     * Adds a specific Handling of the parameters
     *
     * @return array of Specific parameters to be sent.
     * @param  mixed  $parameters the parameters array (passed by reference)
     */
    public function validateParameters(&$parameters)
    {
        if (!isset($parameters['apikey']))
        {
            throw new \Exception('The apikey must be defined');
        }
    }
}
