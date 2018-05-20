<?php

include_once("../Conexao.php");

class Servico
{
    protected $id_servico;
    protected $servico;
    protected $observacao;
    protected $criado;
    protected $modificado;

    /**
     * @return mixed
     */
    public function getIdServico()
    {
        return $this->id_servico;
    }

    /**
     * @param mixed $id_servico
     */
    public function setIdServico($id_servico)
    {
        $this->id_servico = $id_servico;
    }

    /**
     * @return mixed
     */
    public function getServico()
    {
        return $this->servico;
    }

    /**
     * @param mixed $servico
     */
    public function setServico($servico)
    {
        $this->servico = $servico;
    }

    /**
     * @return mixed
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * @param mixed $observacao
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;
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

        $sql = "SELECT * FROM servico";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_servico)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM servico WHERE id_servico = $id_servico";
        $dados = $conexao->recuperarDados($sql);

        $this->id_servico = $dados[0]['id_servico'];
        $this->servico = $dados[0]['servico'];
        $this->observacao = $dados[0]['observacao'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $servico = $dados['servico'];
        $observacao = $dados['observacao'];


        $sql = "INSERT INTO servico(servico,observacao) VALUES('$servico','$observacao')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_servico = $dados['id_servico'];
        $servico = $dados['servico'];
        $observacao = $dados['observacao'];

        $sql = "UPDATE servico SET servico = '$servico', observacao = '$observacao' WHERE id_servico = $id_servico";

        return $conexao->executar($sql);
    }

    public function excluir($id_servico)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM servico WHERE id_servico = $id_servico";

        return $conexao->executar($sql);
    }
}