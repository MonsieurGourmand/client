<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/19/17
 * Time: 4:47 PM
 */

namespace Mgd\Entity;


class SupplierContact
{
    /**
     * @var integer
     */
    private $idsuppliercontact;

    /**
     * @var Contact
     */
    private $contact;

    /**
     * @var integer
     */
    private $idcontact;

    /**
     * @var integer
     */
    private $supplier;

    /**
     * @var integer
     */
    private $idsupplier;

    /**
     * @var integer
     */
    private $notification;

    /**
     * @return int
     */
    public function getIdsuppliercontact()
    {
        return $this->idsuppliercontact;
    }

    /**
     * @param int $idsuppliercontact
     */
    public function setIdsuppliercontact($idsuppliercontact)
    {
        $this->idsuppliercontact = $idsuppliercontact;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return int
     */
    public function getIdcontact()
    {
        return $this->idcontact;
    }

    /**
     * @param int $idcontact
     */
    public function setIdcontact($idcontact)
    {
        $this->idcontact = $idcontact;
    }

    /**
     * @return int
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param int $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return int
     */
    public function getIdsupplier()
    {
        return $this->idsupplier;
    }

    /**
     * @param int $idsupplier
     */
    public function setIdsupplier($idsupplier)
    {
        $this->idsupplier = $idsupplier;
    }

    /**
     * @return int
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param int $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
    }

}