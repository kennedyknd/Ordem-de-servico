<?php

include_once '../Conexao.php';

class Usuario
{
    protected $id_usuario;
    protected $nome;
    protected $email;
    protected $senha;
    protected $id_perfil;

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
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
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getIdPerfil()
    {
        return $this->id_perfil;
    }

    /**
     * @param mixed $id_perfil
     */
    public function setIdPerfil($id_perfil)
    {
        $this->id_perfil = $id_perfil;
    }

    public function recuperarDados()
    {
        $conexao = new Conexao();

        $sql = "SELECT
                    user.id_usuario,
                    user.nome,
                    user.email,
                    user.senha,
                    pfl.nome as perfil
                FROM usuario user
                JOIN perfil pfl ON (user.id_perfil = pfl.id_perfil)
                ORDER BY
                    user.nome";
        return $conexao->recuperarDados($sql);
    }

    public function carregarPorId($id_usuario)
    {

        $conexao = new Conexao();


        $sql = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";

        $dados = $conexao->recuperarDados($sql);

        $this->id_usuario = $dados[0]['id_usuario'];
        $this->nome = $dados[0]['nome'];
        $this->email = $dados[0]['email'];
        $this->senha = $dados[0]['senha'];
        $this->id_perfil = $dados[0]['id_perfil'];

        return $conexao->executar($sql);
    }

    public function logar($dados)
    {
        $email = $dados['email'];
        $senha = md5($dados['senha']);

        $conexao = new Conexao();


        $sql = "select * from usuario 
                where email = '$email'
                and senha = '$senha'";
        $dados = $conexao->recuperarDados($sql);

        if(count($dados)){
            $_SESSION['usuario']['id_usuario'] = $dados[0]['id_usuario'];
            $_SESSION['usuario']['nome'] = $dados[0]['nome'];
            $_SESSION['usuario']['email'] = $dados[0]['email'];
            $_SESSION['usuario']['id_perfil'] = $dados[0]['id_perfil'];
        }

    }

    public function deslogar()
    {
        unset($_SESSION['usuario']);
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $email = $dados['email'];
        $senha = md5($dados['senha']);
        $id_perfil = $dados['id_perfil'];

        $conexao = new Conexao();

        $sql = "INSERT INTO usuario (nome, email, senha, id_perfil) 
                             VALUES ('$nome', '$email', '$senha', '$id_perfil')";


        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $id_usuario = $dados['id_usuario'];
        $nome = $dados['nome'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $id_perfil = $dados['id_perfil'];

        $conexao = new Conexao();

        $sql = "UPDATE usuario SET
                  nome = '$nome',
                  email = '$email',
                  senha = '$senha',
                  id_perfil = '$id_perfil'
                WHERE id_usuario = '$id_usuario'";

        return $conexao->executar($sql);
    }

    public function excluir($id_usuario)
    {
        $conexao = new Conexao();

        $sql = "DELETE FROM usuario WHERE id_usuario = '$id_usuario'";
        return $conexao->executar($sql);
    }

    public function possuiAcesso()
    {
        $raizUrl = '/php/Ordem-de-servico2/';
        $url = $_SERVER['REQUEST_URI'];

        $sql = "select * from pagina where publica = 1";

        $conexao = new Conexao();
        $paginas = $conexao->recuperarDados($sql);

        // Verificando se página é pública
        foreach($paginas as $pagina){
            if($url == $raizUrl . $pagina['caminho']){
                return true;
            }
        }

        if(!empty($_SESSION['usuario']['id_usuario'])){
            $perfil = $_SESSION['usuario']['id_perfil'];

            $sql = "select * from permissao pe
                        inner join pagina pa on pa.id_pagina = pe.id_pagina
                    where id_perfil = $perfil";

            $paginas = $conexao->recuperarDados($sql);

            // Verificando se o perfil tem acesso à página
            foreach($paginas as $pagina){
                if($url == $raizUrl . $pagina['caminho']){
                    return true;
                }
            }
        }

        return false;
    }
}