<?php
class PageController extends Controller
{
    public function __construct(PDO $conexion)
    {
        
    }

    public function Faltante(){
      
        $this->render('Faltante',[],'site');

    }
    public function Desarme(){

        $this->render('Desarme',[],'site');
    }
    public function NoEntregado(){

        $this->render('NoEntregado',[],'site');
        
    }
    public function Stagein(){

        $this->render('Stagein',[],'site');
        
    }
    public function RepeticionRack(){

        $this->render('RepeticionRack',[],'site');
        
    }
    public function Ulote(){

        $this->render('Ulote',[],'site');
        
    }

}