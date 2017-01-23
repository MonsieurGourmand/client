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

    /**
     * @param int $iddocument
     */
    public function setIddocument($iddocument)
    {
        $this->iddocument = $iddocument;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
