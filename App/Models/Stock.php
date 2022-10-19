<?php
class Stock extends Orm {

    public function __construct(PDO $conexion){

parent::__construct('Deposito' ,'stock',$conexion);
        
    }
}