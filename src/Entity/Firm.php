<?php

namespace Mgd\Entity;

class Firm
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $reference;


     /**
      * @var string
      */
     private $customerReference;


    /**
     * @var integer
     */
    private $idFirm;

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param string $customerReference
     */
    public function setCustomerReference($customerReference)
    {
        $this->customerReference = $customerReference;
    }

    /**
     * @return int
     */
    public function getIdFirm()
    {
        return $this->idFirm;
    }

    /**
     * @param int $idFirm
     */
    public function setIdFirm($idFirm)
    {
        $this->idFirm = $idFirm;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
