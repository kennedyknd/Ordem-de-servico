<?php

include_once("../Conexao.php");

class FormaPagamento
{
    protected $id_formaPagamento;
    protected $tipo;
    protected $descricao;
    protected $criado;
    protected $modificado;

    /**
     * @return mixed
     */
    public function getIdFormaPagamento()
    {
        return $this->id_formaPagamento;
    }

    /**
     * @param mixed $id_formaPagamento
     */
    public function setIdFormaPagamento($id_formaPagamento)
    {
        $this->id_formaPagamento = $id_formaPagamento;
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

        $sql = "SELECT * FROM formaPagamento";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_formaPagamento)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM formaPagamento WHERE id_formaPagamento = $id_formaPagamento";
        $dados = $conexao->recuperarDados($sql);

        $this->id_formaPagamento = $dados[0]['id_formaPagamento'];
        $this->tipo = $dados[0]['tipo'];
        $this->descricao = $dados[0]['descricao'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $tipo = $dados['tipo'];
        $descricao = $dados['descricao'];


        $sql = "INSERT INTO formaPagamento(tipo,descricao) VALUES('$tipo','$descricao')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_formaPagamento = $dados['id_formaPagamento'];
        $tipo = $dados['tipo'];
        $descricao = $dados['descricao'];

        $sql = "UPDATE formaPagamento SET tipo = '$tipo', descricao = '$descricao' WHERE id_formaPagamento = $id_formaPagamento";

        return $conexao->executar($sql);
    }

    public function excluir($id_formaPagamento)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM formaPagamento WHERE id_formaPagamento = $id_formaPagamento";

        return $conexao->executar($sql);
    }
}