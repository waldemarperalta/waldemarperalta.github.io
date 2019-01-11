<?php

@session_start();

class AdministradorController extends AbstractController {

    private $dto;

    //put your code here

    public function __construct() {
        parent::__construct('AdministradorController');
    }

    public function logar($attr) {
        $dto = $this->setAttributes($attr);
        $admLogado = $dto->logar();
 header("Location: Pages/adm/inicial.php?menu=ini");
        if (!empty($admLogado)) {
            $_SESSION['idAdmLoged']  = $admLogado[0]->idAdministrador;
            $_SESSION['nomeAdm']     = $admLogado[0]->nome;
            $_SESSION['emailAdm']    = $admLogado[0]->email;
            $_SESSION['passwordAdm'] = $admLogado[0]->password;
           
        } 
        else {
            header("Location: index.php?failLogin");
        }
    }
    
    public function findAdm(){
        return self::getDTO()->find();
    }

    public function sessionIsset() {
        if (!isset($_SESSION['idAdmLoged']))
            header("Location:login.php");

    }

    public function sessionExist() {
        return isset($_SESSION['idAdmLoged']);
    }

    public function logout() {
        unset($_SESSION['idAdmLoged']);
        unset($_SESSION['emailAdm']);
        header("Location: index.php");
    }

   
    public function delete($a) {
        $this->setAttributes($a)->delete('id');
        header("Location: Pages/Utilizador/");
    }

}

?>
