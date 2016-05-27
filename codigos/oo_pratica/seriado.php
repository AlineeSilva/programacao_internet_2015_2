<?php
class Seriado{
    private $temporadas;
    private $idiomas=array();
    private $nome;
    function __construct($nome){
        $this->nome = $nome;
    }
    function addIdioma($idioma){
        $this->idiomas.push($idioma);
    }
    function getIdiomas(){
        return $this->idiomas;
    }
    
}

?>