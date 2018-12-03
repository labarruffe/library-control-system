<?php
include "Mysql.class.php";

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

    function getAll($isOrdered = false) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");

        if ($isOrdered) {
            $resultado = mysqli_query($ok, "Select * from funcionarios order by nome") or 
            die ("Não é possível consultar funcionários.");
        } else {
            $resultado = mysqli_query($ok, "Select * from funcionarios") or 
            die ("Não é possível consultar funcionários.");
        }
        
        return $resultado;
    }

    function getById($id) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
        
        $resultado = mysqli_query($ok, "Select * from funcionarios where id = '$id'") or 
        die ("Não é possível retornar dados do funcionário!");

        return $resultado;
    }

    function update($id, $nome, $data_contratacao) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
        
        mysqli_query($ok, "update funcionarios set nome='$nome', data_contratacao='$data_contratacao' where id='$id'") or 
        die ("Não é possível alterar dados do funcionário!");
    }

    function delete($id) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");

        mysqli_query($ok, "delete from funcionarios where id='$id'") or die ("Não é possível deletar funcionário!");
        print("Funcionário deletado com sucesso (id): $id");
    }


}

?>