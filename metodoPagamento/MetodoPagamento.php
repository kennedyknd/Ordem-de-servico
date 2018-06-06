<?php

include_once("../Conexao.php");

class MetodoPagamento
{
    protected $id_metodoPagamento;
    protected $tipo;
    protected $descricao;
    protected $criado;
    protected $modificado;

    /**
     * @return mixed
     */
    public function getIdMetodoPagamento()
    {
        return $this->id_metodoPagamento;
    }

    /**
     * @param mixed $id_metodoPagamento
     */
    public function setIdMetodoPagamento($id_metodoPagamento)
    {
        $this->id_metodoPagamento = $id_metodoPagamento;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * @param mixed $criado
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;
    }

    /**
     * @return mixed
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * @param mixed $modificado
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM metodoPagamento";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_metodoPagamento)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM metodoPagamento WHERE id_metodoPagamento = $id_metodoPagamento";
        $dados = $conexao->recuperarDados($sql);

        $this->id_metodoPagamento = $dados[0]['id_metodoPagamento'];
        $this->tipo = $dados[0]['tipo'];
        $this->descricao = $dados[0]['descricao'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $tipo = $dados['tipo'];
        $descricao = $dados['descricao'];


        $sql = "INSERT INTO metodoPagamento(tipo,descricao) VALUES('$tipo','$descricao')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_metodoPagamento = $dados['id_metodoPagamento'];
        $tipo = $dados['tipo'];
        $descricao = $dados['descricao'];

        $sql = "UPDATE metodoPagamento SET tipo = '$tipo', descricao = '$descricao' WHERE id_metodoPagamento = $id_metodoPagamento";

        return $conexao->executar($sql);
    }

    public function excluir($id_metodoPagamento)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM metodoPagamento WHERE id_metodoPagamento = $id_metodoPagamento";

        return $conexao->executar($sql);
    }
}