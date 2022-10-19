<?php
class PageController extends Controller
{
    public function __construct(PDO $conexion)
    {
        
    }


    public function home(){
      
        $this->render('home',[],'site');

    }
    public function listar(){

   $this->render(('home'));
    }
    public function modificar(){

        $this->render(('home'));
        
    }
}