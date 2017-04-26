<?php

namespace Mgd\Entity;

class Document extends Master
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
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
