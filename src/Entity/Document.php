<?php

namespace Mgd\Entity;

class Document
{
    /**
     * @var integer
     */
    private $iddocument;

    /**
     * @var string
     */
    private $url;

    /**
     * @return int
     */
    public function getIddocument()
    {
        return $this->iddocument;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
