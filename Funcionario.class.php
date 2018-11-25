<?php

class Funcionario {
    private $id;
    private $nome;
    private $data_contratacao;

    function __construct($nome) {
        $this->nome=$nome;
        $this->data_contratacao=new DateTime();
    }

    // "método mágico" para criação de set genérico
	// ou seja, cria um set que pode ser usado por todos os atributos
	function __set($prop, $val) {
		$this->$prop = $val;
    }
    
	// "método mágico" para criação de get genérico
	// ou seja, cria um get que pode ser usado por todos os atributos
	function __get($prop) {
		return $this->$prop;
    }
    
    function __toString() {
        return "<br> Método toString de Funcionário <br>";
    }
}

?>