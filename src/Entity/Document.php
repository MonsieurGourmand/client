<?php

namespace Mgd\Entity;

class Document extends Master
{
    /**
     * @var integer
     */
    private $idDocument;

    /**
     * @var string
     */
    private $url;

    /**
     * @return int
     */
    public function getIdDocument()
    {
        return $this->idDocument;
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
