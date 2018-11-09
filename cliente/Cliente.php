<?php

include_once("../Conexao.php");

class Cliente
{
    protected $id_cliente;
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
    protected $localidade;
    protected $uf;
    protected $numero;
    protected $complemento;
    protected $foto;
    protected $criado;
    protected $modificado;

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
    public function getLocalidade()
    {
        return $this->localidade;
    }

    /**
     * @param mixed $localidade
     */
    public function setLocalidade($localidade)
    {
        $this->localidade = $localidade;
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

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }




    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM cliente";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_cliente)
    {
        $conexao = new Conexao();

        $sql = "SELECT * FROM cliente WHERE id_cliente = $id_cliente";
        $dados = $conexao->recuperarDados($sql);

        $this->id_cliente= $dados[0]['id_cliente'];
        $this->nome = $dados[0]['nome'];
        $this->datanasci = $dados[0]['datanasci'];
        $this->email = $dados[0]['email'];
        $this->cpf = $dados[0]['cpf'];
        $this->telefone = $dados[0]['telefone'];
        $this->celular = $dados[0]['celular'];
        $this->rg = $dados[0]['rg'];
        $this->sexo = $dados[0]['sexo'];
        $this->cep = $dados[0]['cep'];
        $this->logradouro = $dados[0]['logradouro'];
        $this->bairro = $dados[0]['bairro'];
        $this->localidade = $dados[0]['localidade'];
        $this->uf = $dados[0]['uf'];
        $this->numero = $dados[0]['numero'];
        $this->complemento = $dados[0]['complemento'];
    }

    public function inserir($dados)
    {
        $conexao = new Conexao();

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
        $localidade = $dados['localidade'];
        $uf = $dados['uf'];
        $numero = $dados['numero'];
        $complemento = $dados['complemento'];
        $foto = $_FILES['foto']['name'];
        $this->uploadFoto();

        $sql = "INSERT INTO cliente (nome, datanasci, email, cpf, telefone, celular, rg, sexo, cep, logradouro, bairro, localidade, uf, numero, complemento, foto)";
        $sql .= " VALUES ('$nome','$datanasci','$email','$cpf','$telefone','$celular','$rg','$sexo','$cep','$logradouro','$bairro','$localidade','$uf','$numero','$complemento','$foto')";

        return $conexao->executar($sql);
    }

    public function uploadFoto(){

        if ($_FILES['foto']['error'] == UPLOAD_ERR_OK)
        {
            $origem = $_FILES['foto']['tmp_name'];
            $destino = '../upload/produto' . $_FILES['foto']['name'];
            move_uploaded_file($origem, $destino);
        }
    }

    public function alterar($dados)
    {
        $conexao = new Conexao();


        $id_cliente = $dados['id_cliente'];
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
        $localidade = $dados['localidade'];
        $uf = $dados['uf'];
        $numero = $dados['numero'];
        $complemento = $dados['complemento'];

        $sql = "UPDATE cliente SET nome = '$nome', datanasci = '$datanasci', email = '$email', cpf = '$cpf', telefone = '$telefone', celular = '$celular', rg = '$rg', sexo = '$sexo', cep = '$cep', logradouro = '$logradouro', bairro = '$bairro', localidade = '$localidade', uf = '$uf', numero = '$numero', complemento = '$complemento' WHERE id_cliente = $id_cliente";

        return $conexao->executar($sql);
    }

    public function excluir($id_cliente)
    {

        $conexao = new Conexao();

        $sql = "DELETE FROM cliente WHERE id_cliente = $id_cliente";


        return $conexao->executar($sql);
    }

    public function existeCpf($cpf)
    {
        $conexao = new Conexao();

//        $sql = "SELECT COUNT(*) qtd FROM cliente WHERE cpf ='$cpf';";
        $sql = "SELECT nome, telefone, email, COUNT(*) qtd FROM cliente WHERE cpf ='$cpf'";
        $dados = $conexao->recuperarDados($sql);

        return $dados;
    }

    public function existeRg($rg)
    {
        $conexao = new Conexao();

//        $sql = "SELECT COUNT(*) qtd FROM cliente WHERE rg ='$rg';";
        $sql = "SELECT nome, telefone, email, COUNT(*) qtd FROM cliente WHERE rg ='$rg'";
        $dados = $conexao->recuperarDados($sql);

        return $dados;
    }
}