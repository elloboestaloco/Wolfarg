<?php
require_once(__DIR__.'/../models/Stock.php');

class StockController extends Controller
{

    private $stockModel;
    public function __construct(PDO $conexion)
    {
       $this->stockModel=new Stock($conexion);
    }

    public function home(){
    $stock =$this->stockModel->getAll();

    echo '<pre>';
    var_dump($stock);
    
    echo '</pre>';
    }
}