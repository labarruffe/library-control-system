<?php
include "Mysql.class.php";

class Estoque {
    private $id;
    private $id_livro;
    private $id_funcionario;
    private $quant_total;
    private $quant_recebida;
    private $data_atualizacao;

    function __construct($quant_total, $quant_recebida, $data_atualizacao) {
        $this->quant_total=$quant_total;
        $this->quant_recebida=$quant_recebida;
        $this->data_atualizacao=$data_atualizacao;
    }
    
    function __toString() {
        return "<br> Método toString de Estoque <br>";
    }

    function getAll() {
        $mysql = new Mysql();
        $ok = $mysql->dbConnect() or die ("Não é possível conectar-se ao servidor.");
    
        $resultado = mysqli_query($ok, "Select e.id, l.titulo, f.nome, forn.cidade, e.quant_total, e.quant_recebida, e.data_atualizacao from estoques e, livros l, funcionarios f, fornecedores forn where e.id_livro = l.id and e.id_funcionario = f.id and l.id_fornecedor = forn.id") or 
        die ("Não é possível consultar estoque.");
        
        return $resultado;
    }

    

}

?>