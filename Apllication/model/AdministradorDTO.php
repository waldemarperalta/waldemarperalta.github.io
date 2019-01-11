<?php

@session_start();

class AdministradorDTO extends AbstractDTO {

    public $id;
    public $nome;
    public $email;
    public $password;
    

    public function getId() {
        return $this->idAdministrador;
    }

    public function setId($id) {
        $this->idAdministrador = $id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    public function __construct() {
        parent::__construct('AdministradorDTO');
    }


    public function logar() {
        try {
            $queryString = "SELECT * FROM administrador WHERE email='" . $this->email . "' AND password='" . $this->password . "'";
            
            $query = parent::Connection()->query($queryString);
            $this->result = $query->fetchAll(PDO::FETCH_OBJ);
            //die(var_dump($this->result));
            return $this->result;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


 public function userExist() {
        if (!empty($this->result)) {
            return true;
        }
        return false;
    }
    public function findDados($id = null) {
        $where = isset($id) ? " WHERE id='" . $id . "' " : null;
        $queryString = "SELECT Administrador.idAdministrador,nome,email,password, FROM administrador" . $where;
        $query = parent::Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}

?>

