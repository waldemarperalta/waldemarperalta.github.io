<?php

session_start();
class ClienteController extends AbstractController {

    public function save($attr) {
        $dto = $this->setAttributes($attr);
        $dto->save();
        header("Location:login.php");
    }

public function __construct() {
        parent::__construct('ClienteController');
    }

public function logar($attr) {
        $dto = $this->setAttributes($attr);
        $clienteLogado = $dto->logar();

        if (!empty($clienteLogado)) {
            
            $_SESSION['idClienteLoged']  = $clienteLogado[0]->idCliente;
            $_SESSION['nomeCliente']     = $clienteLogado[0]->nomeCliente;
            $_SESSION['emailCliente']    = $clienteLogado[0]->emailCliente;
            $_SESSION['senhaCliente']    = $clienteLogado[0]->senhaCliente;

            $loged=$_SESSION['idClienteLoged'];
            header("Location: Pages/cliente/pagecliente.php");       
        } 
        else {
            header("Location: Pages/cliente/login.php");
            echo("");
        }
    }
    
    public function sessionIsset() {
        if (!isset($_SESSION['idClienteLoged']))
            header("Location:Pages/cliente/login.php");

    }

    public function sessionExist() {
        return isset($_SESSION['idClienteLoged']);
    }

    public function logout() {
        unset($_SESSION['idClienteLoged']);
        unset($_SESSION['nomeCliente']);
        unset($_SESSION['emailCliente']);
        unset($_SESSION['senhaCliente']);
        header("Location:Pages/cliente/login.php");
    }

    public function findCliente() {
        $queryString = " SELECT * FROM cliente ";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
        }
}
?>