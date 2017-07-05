<?php

namespace Mgd\Entity;


class Firm extends Master
{
    /**
     * @var \Mgd\Route\Firm\User
     */
    public $users;

    /**
     * @param int $idFirm
     */
    public function setIdFirm($idFirm)
    {
        $this->idFirm = $idFirm;
    }

    /**
     * @var \Mgd\Route\Firm\Product
     */
    public $products;


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
     * @var integer
     */
    private $postagePaid;

    /**
     * @var string
     */
    private $comment;

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getPostagePaid()
    {
        return $this->postagePaid;
    }

    /**
     * @param string $postagePaid
     */
    public function setPostagePaid($postagePaid)
    {
        $this->postagePaid = $postagePaid;
    }


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
