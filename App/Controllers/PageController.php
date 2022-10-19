<?php
class PageController extends Controller
{
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