<?php

class Sql{

	public $pdo;
        
	public function Connect(){
        try{
          $this->pdo = new PDO ("mysql:host=localhost;dbname=grupo02_g2;charset=utf8","grupo02_user","tecpuc2019",
          array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }catch(PDOException $e){
            echo "Erro ao conectar com o banco de dados " . $e->getMessage();
        }
    }
}