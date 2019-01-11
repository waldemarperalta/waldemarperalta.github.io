 <?php 
class RegistrosDTO extends AbstractDTO {
        
	    public $id;
	    public $idCliente;
	    public $comprou;
	    public $quanto;
	    public $dia;
        public $mes;
        public $ano;
        public $tipo;
	    public $descricao;
        
        
       
        function getId() {
            return $this->id;
        }

        function getIdCliente() {
            return $this->idCliente;
        }

        function getComprou() {
            return $this->comprou;
        }

        function getQuanto() {
            return $this->quanto;
        }

        function getDia() {
            return $this->dia;
        }
        function getMes() {
            return $this->mes;
        }

        function getAno() {
            return $this->ano;
        }

        function getTipo() {
            return $this->tipo;
        }

        function getDescricao() {
            return $this->descricao;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
        }

        function setComprou($comprou) {
            $this->comprou = $comprou;
        }

        function setQuanto($quanto) {
            $this->quanto = $quanto;
        }

        function setDia($dia) {
            $this->dia = $dia;
        }
         function setMes($mes) {
            $this->mes = $mes;
        }

         function setAno($ano) {
            $this->ano = $ano;
        }

        function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function findRegistros() {
        $id = $_SESSION['idClienteLoged'];
        $dia = date('d');
        $mes = date('m');
        $ano = date('y');
        $queryString = " SELECT * FROM registros WHERE idCliente='{$id}' AND dia='{$dia}' AND mes='{$mes}'  && ano='{$ano}' 
        ORDER BY  `registros`.`id` DESC LIMIT 0 , 50 ";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
        }
            public function findRegistrosNovo() {
        $id = $_SESSION['idClienteLoged'];
        $queryString = " SELECT * FROM registros WHERE idCliente='{$id}'
        ORDER BY  `registros`.`id` DESC LIMIT 0 , 50 ";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function relatorioAnual() {
        $id = $_SESSION['idClienteLoged'];
        $ano=date('y');
        $queryString = "SELECT  quanto  FROM  `registros` WHERE idcliente ='{$id}' AND ano='$ano' ";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function relatorioDia() {
        $id = $_SESSION['idClienteLoged'];
        $hoje = date('d');
        $mes = date('m');
        $ano = date('y');

        $queryString = "SELECT quanto FROM `registros` WHERE idcliente ='{$id}' AND dia='{$hoje}' AND mes='{$mes}' AND ano='{$ano}' ";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function relatorioMensal() {
        $id = $_SESSION['idClienteLoged'];
        $mes = date('m');
        $ano = date('y');
        $queryString = "SELECT  quanto  FROM  `registros` WHERE idcliente ='{$id}' AND mes='{$mes}' AND ano='$ano' ";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
        }

        public function Mensal() {
        $id = $_SESSION['idClienteLoged'];
        $mes = date('m');
        $ano = date('y');
        $queryString = "SELECT * FROM  `registros` WHERE idcliente ='{$id}' AND mes='{$mes}' AND ano='$ano' ";
        $query = $this->Connection()->query($queryString);
        return $query->fetchAll(PDO::FETCH_OBJ);
        }

    public function apagar($id) {
       $queryString = " DELETE from 'registros' where id ={$id} ";

       header("location: Pages/cliente/pagecliente.php");
    }
           
        public function __construct() {
            parent::__construct('RegistrosDTO');
    }
	
}

?>