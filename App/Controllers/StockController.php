<?php
use function MongoDB\BSON\toJSON;
require_once(__DIR__.'/../models/Stock.php');

class StockController extends Controller
{

    private $stockModel;
    public function __construct(PDO $conexion)
    {
       $this->stockModel=new Stock($conexion);
    }

    public function Faltante(){
    $id=$_POST['id'];
    $tp=$_POST['tipo'];
    $stock =$this->stockModel->getAll($id,$tp);

   // echo '<pre>';json_encode(
    echo  json_encode($stock);
    
  //  echo '</pre>';
    }
    public function depof(){
      $id=$_POST['id'];
      $dp=$_POST['dp'];
      $stock =$this->stockModel->getFechaId($id,$dp);
  
     // echo '<pre>';json_encode(
      echo json_encode ($stock);
      
    //  echo '</pre>';
      }
}