<?php
namespace app\controllers;
use app\core\Controller;

class CadastroController extends Controller{
    
   public function index(){
       $dados["view"]="lista";
       $this->load("template",$dados);
   } 

   public function cadastrar(){
    $dados["view"]="cadastro";
    $this->load("template",$dados);
} 
}
