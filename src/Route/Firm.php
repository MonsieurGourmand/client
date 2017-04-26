<?php
/**
 * Created by PhpStorm.
 * User: remi
 * Date: 1/20/17
 * Time: 6:08 PM
 */

namespace Mgd\Route;


use Mgd\Entity\User;

class Firm
{
    private $suppliers_url = '/suppliers';
    private $customers_url = '/customers';
    private $contacts_url = '/users';

    public function __construct(\Mgd\Mgd $master)
    {
        $this->master = $master;
        $this->entity = \Mgd\Entity\Firm::class;
        $this->contact = User::class;
    }

    public function getAll()
    {
        $params = array();
        return $this->master->getAll('', $this->entity,$params);
    }

    public function get($id)
    {
        return $this->master->get('',$id,$this->entity);
    }

    public function post(\Mgd\Entity\Firm $firm)
    {
        return $this->master->post('',$firm,$this->entity);
    }

    public function put(\Mgd\Entity\Firm $firm)
    {
        return $this->master->put('',$firm->getIdFirm(),$firm,$this->entity);
    }

    public function remove(\Mgd\Entity\Firm $firm)
    {
        return $this->master->remove('',$firm->getIdFirm());
    }

    public function getSuppliers()
    {
        return $this->master->getAll($this->suppliers_url,$this->entity);
    }

    public function getCustomers()
    {
        return $this->master->getAll($this->customers_url,$this->entity);
    }

    public function getSupplier($id)
    {
        return $this->master->get($this->suppliers_url,$id,$this->entity);
    }

    public function getCustomer($id)
    {
        return $this->master->get($this->customers_url,$id,$this->entity);
    }

    public function addSupplier(\Mgd\Entity\Firm $supplier)
    {
        return $this->master->put($this->suppliers_url,$supplier->getIdFirm(),$supplier,$this->entity);
    }

    public function addCustomer(\Mgd\Entity\Firm $customer)
    {
        return $this->master->put($this->customers_url,$customer->getIdFirm(),$customer,$this->entity);
    }

    public function getContacts()
    {
        return $this->master->getAll($this->contacts_url,$this->contact);
    }

    public function getContact($id)
    {
        return $this->master->get($this->contacts_url,$id,$this->contact);
    }

    public function addContact(User $user)
    {
        return $this->master->post($this->contacts_url,$user,$this->contact);
    }

    public function putContact(User $user)
    {
        return $this->master->put($this->contacts_url,$user->getId(),$user,$this->contact);
    }
}