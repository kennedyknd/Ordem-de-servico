<?php

include_once("../Conexao.php");

class OrdemServico
{
    protected $id_ordemServico;
    protected $custo;
    protected $observacao;
    protected $criado;
    protected $modificado;
    protected $id_servico;
    protected $id_formaPagamento;
    protected $id_metodoPagamento;
    protected $id_cliente;
    protected $id_situacao;

    /**
     * @return mixed
     */
    public function getIdOrdemServico()
    {
        return $this->id_ordemServico;
    }

    /**
     * @param mixed $id_ordemServico
     */
    public function setIdOrdemServico($id_ordemServico)
    {
        $this->id_ordemServico = $id_ordemServico;
    }

    /**
     * @return mixed
     */
    public function getCusto()
    {
        return $this->custo;
    }

    /**
     * @param mixed $custo
     */
    public function setCusto($custo)
    {
        $this->custo = $custo;
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
    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    /**
     * @param mixed $id_cliente
     */
    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

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


    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM ordemServico";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_ordemServico)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM ordemServico WHERE id_ordemServico = $id_ordemServico";
        $dados = $conexao->recuperarDados($sql);

        $this->id_ordemServico = $dados[0]['id_ordemServico'];
        $this->custo = $dados[0]['custo'];
        $this->observacao = $dados[0]['observacao'];
        $this->id_servico = $dados[0]['id_servico'];
        $this->id_formaPagamento = $dados[0]['id_formaPagamento'];
        $this->id_metodoPagamento = $dados[0]['id_metodoPagamento'];
        $this->id_cliente = $dados[0]['id_cliente'];
        $this->id_situacao = $dados[0]['id_situacao'];

    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

        $custo = $dados['custo'];
        $observacao = $dados['observacao'];
        $id_servico = $dados['id_servico'];
        $id_formaPagamento = $dados['id_formaPagamento'];
        $id_metodoPagamento = $dados['id_metodoPagamento'];
        $id_cliente = $dados['id_cliente'];
        $id_situacao = $dados['id_situacao'];


        $sql = "INSERT INTO ordemServico (custo, observacao, id_servico, id_formaPagamento, id_metodoPagamento, id_cliente, id_situacao)";
        $sql .= " VALUES ('$custo','$observacao','$id_servico','$id_formaPagamento','$id_metodoPagamento','$id_cliente','$id_situacao')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();

        $id_ordemServico = $dados['id_ordemServico'];
        $custo = $dados['custo'];
        $observacao = $dados['observacao'];
        $id_servico = $dados['id_servico'];
        $id_formaPagamento = $dados['id_formaPagamento'];
        $id_metodoPagamento = $dados['id_metodoPagamento'];
        $id_cliente = $dados['id_cliente'];
        $id_situacao = $dados['id_situacao'];

        $sql = "UPDATE ordemServico SET custo = '$custo', observacao = '$observacao', id_servico = '$id_servico', id_formaPagamento = '$id_formaPagamento', id_metodoPagamento = '$id_metodoPagamento', id_cliente = '$id_cliente', id_situacao = '$id_situacao' WHERE id_ordemServico = $id_ordemServico";

        return $conexao->executar($sql);
    }

    public function excluir($id_ordemServico)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM ordemServico WHERE id_ordemServico = $id_ordemServico";


        return $conexao->executar($sql);
    }
}