<?php
@session_start();

class RegistrosController extends AbstractController {

    public function save($registro) {
        $dto = $this->setAttributes($registro);
        $dto->save();
         $loged=$_SESSION['idClienteLoged'];
        header("Location: Pages/cliente/pagecliente.php");   
    }

    public function findRegistrosById($idRegistro) {
        $dto = new RegistrosDTO;
        $dto->setId($idRegistro);
        return $dto->find('idRegistro');
    }

    public function buscarTudo(){
   	$this->result=self::getDTO()->find();
   	$this->gridBind();
    }

    public function buscar($a) {
        $dto = $this->setAttributes($a);
        $dados = $dto->find('id');
        $registro = $dados[0];
        echo $registro->comprou . "-%-" . 
             $registro->quanto . "-%-" . 
             $registro->dia . "-%-" . 
             $registro->tipo . "-%-" . 
             $registro->descricao. "-%-" . 
             $registro->id;
    }

    public function buscarecente($a) {
        $dto = $this->setAttributes($a);
        $dados = $dto->find('comprou');
        $registro = $dados[0];
        echo $registro->comprou . "-%-" . $registro->quanto . "-%-" . $registro->dia . "-%-" . $registro->mes . "-%-" . $registro->ano . "-%-" . $registro->tipo . "-%-" . $registro->descricao. "-%-" . $registro->id;
    }

    public function buscareditar($a) {
        $dto = $this->setAttributes($a);
        $dados = $dto->find('id');
        $registro = $dados[0];
        echo 
        $registro->comprou . "-%-" . 
        $registro->quanto . "-%-" . 
        $registro->dia . "-%-" . 
        $registro->mes . "-%-" . 
        $registro->ano . "-%-" . 
        $registro->tipo . "-%-" . 
        $registro->descricao. "-%-" . 
        $registro->id;
    }

    public function buscarMeses($a) {
        $dto = $this->setAttributes($a);
        $dados = $dto->find('id');
        $registro = $dados[0];
        echo 
        $registro->comprou . "-%-" . 
        $registro->quanto . "-%-" . 
        $registro->dia . "-%-" . 
        $registro->mes . "-%-" . 
        $registro->ano . "-%-" . 
        $registro->tipo . "-%-" . 
        $registro->descricao. "-%-" . 
        $registro->id;
    }

    public function apagar($id) {
        $this->setAttributes($id)->delete('id');
        header("location: Pages/cliente/pagecliente.php");
    }

    public function editar($id) {
      $dto = $this->setAttributes($id)->update('id');
      header("location: Pages/cliente/pagecliente.php");
    }

   public function __construct() {
        parent::__construct('RegistrosController');
    }
}

?>