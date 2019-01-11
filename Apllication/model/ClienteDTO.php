<?php

@session_start();

class ClienteDTO extends AbstractDTO {

    public $idCliente;
    public $CodCliente;
    public $nomeCliente;
    public $sobrenome;
    public $emailCliente;
    public $senhaCliente;
    public $profissao;
    
    public function __construct() {
        parent::__construct('ClienteDTO');
    }
    
    function getIdCliente() {
        return $this->idCliente;
    }

    function getCodCliente() {
        return $this->CodCliente;
    }

    function getNomeCliente() {
        return $this->nomeCliente;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function getEmailCliente() {
        return $this->emailCliente;
    }

    function getSenhaCliente() {
        return $this->senhaCliente;
    }

    function getProfissao() {
        return $this->profissao;
    }


    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setCodCliente($CodCliente) {
        $this->CodCliente = $CodCliente;
    }

    function setNomeCliente($nomeCliente) {
        $this->nomeCliente = $nomeCliente;
    }

    function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    function setEmailCliente($emailCliente) {
        $this->emailCliente = $emailCliente;
    }

    function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    function setSenhaCliente($senhaCliente) {
        $this->senhaCliente = $senhaCliente;
    }

    public function logar() {
        try {
            $queryString = "SELECT * FROM cliente WHERE nomeCliente='" . $this->nomeCliente . "' AND senhaCliente='" . $this->senhaCliente . "'";

            $query = parent::Connection()->query($queryString);
            $this->result = $query->fetchAll(PDO::FETCH_OBJ);
            //die(var_dump($this->result));
            return $this->result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } 
    public function recupSenha($iban, $nome) {
        $queryString = "SELECT u.id FROM utilizador u
                        INNER JOIN cliente c
                        ON u.idCliente = c.id 
                        WHERE c.nif = '$iban' AND c.nome LIKE '$nome%' ";
        $query = parent::Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateSenha($user, $senha) {
        $queryString = "UPDATE utilizador SET password = '".md5($senha)."' 
                        WHERE id = '$user'";
        parent::Connection()->query($queryString);
    }


    public function findDados($id = null) {
        $where = isset($id) ? " WHERE id='" . $id . "' " : null;
        $queryString = "SELECT utilizador.id,nome,username,password,area,dataCriacao,activo FROM utilizador" . $where;
        $query = parent::Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function userExist() {
        if (!empty($this->result)) {
            return true;
        }
        return false;
    }

}

?>
