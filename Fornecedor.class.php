<?php
include "Mysql.class.php";

class Fornecedor {
    private $id;
    private $nome;
    private $endereco;
    private $cidade;
    private $telefone;

    function __construct($nome, $endereco, $cidade, $telefone) {
        $this->nome=$nome;
        $this->endereco=$endereco;
        $this->cidade=$cidade;
        $this->telefone=$telefone;
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
        return "<br> Método toString de Fornecedor <br>";
    }

    function getAll($isOrdered = false) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");

        if ($isOrdered) {
            $resultado = mysqli_query($ok, "Select * from fornecedores order by nome") or 
            die ("Não é possível consultar fornecedores.");
        } else {
            $resultado = mysqli_query($ok, "Select * from fornecedores") or 
            die ("Não é possível consultar fornecedores.");
        }
        
        return $resultado;
    }

    function getById($id) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
        
        $resultado = mysqli_query($ok, "Select * from fornecedores where id = '$id'") or 
        die ("Não é possível retornar dados do fornecedores!");

        return $resultado;
    }

    function update($id, $nome, $endereco, $cidade, $telefone) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
        
        mysqli_query($ok, "update fornecedores set nome='$nome', endereco='$endereco', cidade='$cidade', telefone='$telefone' where id='$id'") or 
        die ("Não é possível alterar dados do fornecedor!");
    }

    function delete($id) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");

        mysqli_query($ok, "delete from fornecedores where id='$id'") or die ("Não é possível deletar fornecedor!");
        print("Fornecedor deletado com sucesso (id): $id");
    }


}

?>