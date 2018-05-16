<?php

include_once("../Conexao.php");

class Servico
{
    protected $id_servicos;
    protected $servico;
    protected $observacao;
    protected $criado;
    protected $modificado;

    /**
     * @return mixed
     */
    public function getIdServicos()
    {
        return $this->id_servicos;
    }

    /**
     * @param mixed $id_servicos
     */
    public function setIdServicos($id_servicos)
    {
        $this->id_servicos = $id_servicos;
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

        $sql = "SELECT * FROM servicos";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados)
    {
        $servico = $dados['servico'];
        $observacao = $dados['observacao'];

        $conexao = new Conexao();

        $sql = "INSERT INTO servicos(servico,observacao) VALUES('$servico','$observacao')";

        return $conexao->executar($sql);
    }

    public function editar($dados, $id_servicos)
    {
        $servico = $dados['servico'];
        $observacao = $dados['observacao'];

        $conexao = new Conexao();

        $sql = "UPDATE servicos SET servico = '$servico', observacao = '$observacao' WHERE id_servicos = $id_servicos";

        return $conexao->executar($sql);
    }

    public function excluir($id_servicos)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM servicos WHERE id_servicos = $id_servicos";

        return $conexao->executar($sql);
    }
}