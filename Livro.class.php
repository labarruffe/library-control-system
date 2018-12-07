<?php
include "Mysql.class.php";

class Livro {
    private $id;
    private $id_fornecedor;
    private $titulo;
    private $ano_publicacao;
    private $edicao;
    private $editora;

    function __construct($nome, $titulo, $ano_publicacao, $edicao, $editora) {
        $this->nome=$nome;
        $this->nome=$titulo;
        $this->nome=$ano_publicacao;
        $this->nome=$edicao;
        $this->nome=$editora;
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
        return "<br> Método toString de Livro <br>";
    }

    function getAll($isOrdered = false) {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");

        if ($isOrdered) {
            $resultado = mysqli_query($ok, "Select l.id, l.titulo, l.ano_publicacao, l.edicao, l.editora, f.nome from livros l, fornecedores f where l.id_fornecedor = f.id order by titulo") or 
            die ("Não é possível consultar livros.");
        } else {
            $resultado = mysqli_query($ok, "Select l.id, l.titulo, l.ano_publicacao, l.edicao, l.editora, f.nome from livros l, fornecedores f where l.id_fornecedor = f.id") or 
            die ("Não é possível consultar livros.");
        }
        
        return $resultado;
    }

    // function getById($id) {
    //     $mysql = new Mysql();
    //     $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
        
    //     $resultado = mysqli_query($ok, "Select * from funcionarios where id = '$id'") or 
    //     die ("Não é possível retornar dados do funcionário!");

    //     return $resultado;
    // }

    // function update($id, $nome, $data_contratacao) {
    //     $mysql = new Mysql();
    //     $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
        
    //     mysqli_query($ok, "update funcionarios set nome='$nome', data_contratacao='$data_contratacao' where id='$id'") or 
    //     die ("Não é possível alterar dados do funcionário!");
    // }

    // function delete($id) {
    //     $mysql = new Mysql();
    //     $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");

    //     mysqli_query($ok, "delete from funcionarios where id='$id'") or die ("Não é possível deletar funcionário!");
    //     print("Funcionário deletado com sucesso (id): $id");
    // }


}

?>