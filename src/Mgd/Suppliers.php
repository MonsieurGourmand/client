<?php
class Mgd_Suppliers 
{
    public function __construct(Mgd $master) 
    {
        $this->master = $master;
    }

    public function getAll()
    {
    	return $this->master->getAll('fournisseurs');
    }    
}
?>