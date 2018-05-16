<?php

include_once("../Conexao.php");

class Cliente
{
    protected $id_clientes;
    protected $nome;
    protected $datanasci;
    protected $email;
    protected $cpf;
    protected $telefone;
    protected $celular;
    protected $rg;
    protected $sexo;
    protected $cep;
    protected $logradouro;
    protected $bairro;
    protected $cidade;
    protected $uf;
    protected $numero;
    protected $complemento;
    protected $criado;
    protected $modificado;

    /**
     * @return mixed
     */
    public function getIdClientes()
    {
        return $this->id_clientes;
    }

    /**
     * @param mixed $id_clientes
     */
    public function setIdClientes($id_clientes)
    {
        $this->id_clientes = $id_clientes;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDatanasci()
    {
        return $this->datanasci;
    }

    /**
     * @param mixed $datanasci
     */
    public function setDatanasci($datanasci)
    {
        $this->datanasci = $datanasci;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    /**
     * @return mixed
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param mixed $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
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

        $sql = "SELECT * FROM clientes";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $datanasci = $dados['datanasci'];
        $email = $dados['email'];
        $cpf = $dados['cpf'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $rg = $dados['rg'];
        $sexo = $dados['sexo'];
        $cep = $dados['cep'];
        $logradouro = $dados['logradouro'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $uf = $dados['uf'];
        $numero = $dados['numero'];
        $complemento = $dados['complemento'];

        $conexao = new Conexao();

        $sql = "INSERT INTO clientes (nome, datanasci, email, cpf, telefone, celular, rg, sexo, cep, logradouro, bairro, cidade, uf, numero, complemento)";
        $sql .= " VALUES ('$nome','$datanasci','$email','$cpf','$telefone','$celular','$rg','$sexo','$cep','$logradouro','$bairro','$cidade','$uf','$numero','$complemento')";

        return $conexao->executar($sql);
    }

    public function excluir($id_clientes)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM clientes WHERE id_clientes = $id_clientes";


        return $conexao->executar($sql);
    }
}