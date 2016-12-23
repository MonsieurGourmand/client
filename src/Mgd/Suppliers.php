<?php
class Mgd_Suppliers 
{
    public function __construct(FacturationPro $master) 
    {
        $this->master = $master;
    }

    public function getAll()
    {
    	return $this->master->get('fournisseurs');
    }    
}
?>