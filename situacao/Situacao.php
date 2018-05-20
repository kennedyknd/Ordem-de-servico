<?php

include_once("../Conexao.php");

class Situacao
{
    protected $id_situacao;
    protected $situacao;
    protected $descricao;
    protected $criado;
    protected $modificado;

    /**
     * @return mixed
     */
    public function getIdSituacao()
    {
        return $this->id_situacao;
    }

    /**
     * @param mixed $id_situacao
     */
    public function setIdSituacao($id_situacao)
    {
        $this->id_situacao = $id_situacao;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
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

        $sql = "SELECT * FROM situacao";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_situacao)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM situacao WHERE id_situacao = $id_situacao";
        $dados = $conexao->recuperarDados($sql);

        $this->id_situacao = $dados[0]['id_situacao'];
        $this->situacao = $dados[0]['situacao'];
        $this->descricao = $dados[0]['descricao'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $situacao = $dados['situacao'];
        $descricao = $dados['descricao'];


        $sql = "INSERT INTO situacao(situacao,descricao) VALUES('$situacao','$descricao')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_situacao = $dados['id_situacao'];
        $situacao = $dados['situacao'];
        $descricao = $dados['descricao'];

        $sql = "UPDATE situacao SET situacao = '$situacao', descricao = '$descricao' WHERE id_situacao = $id_situacao";

        return $conexao->executar($sql);
    }

    public function excluir($id_situacao)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM situacao WHERE id_situacao = $id_situacao";

        return $conexao->executar($sql);
    }
}