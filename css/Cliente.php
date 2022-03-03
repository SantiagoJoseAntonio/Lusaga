<?php 
    class cliente{
        private $nombre;
        private $apellidop;
        private $apellidom;
        private $rfc;
        private $direccion;
        private $email;
        private $tel;

        public function __construct($nombre,$apellidop,$apellidom,$rfc,$direccion,$email,$tel)
        {
            $this->nombre = $nombre;
            $this->apellidop = $apellidop;
            $this->apellidom = $apellidom;
            $this->rfc  =$rfc;
            $this->direccion = $direccion;
            $this->email = $email;
            $this->tel = $tel;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setApellidop($apellidop){
            $this->apellidop = $apellidop;
        }
        public function getApellidop(){
            return $this->apellidop;
        }
        public function setApellidom($apellidom){
            $this->apellidom = $apellidom;
        }
        public function getApellidom(){
            return $this->apellidom;
        }
        public function setRfc($rfc){
            $this->rfc = $rfc;
        }
        public function getRfc(){
            return $this->rfc;
        }
        public function setDireccion($direccion){
            $this->direccion = $direccion;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setTel($tel){
            $this->tel = $tel;
        }
        public function getTel(){
            return $this->tel;
        }

        public function AltaCliente(){
            $sql = "INSERT INTO clientes (id_cliente,nombre,apellidop,apellidom,rfc,direccion,email,tel) VALUES($nombre,$apellidop,$apellidom,$rfc,$direccion,$email,$tel)";
            if (mysqli_query($conn, $sql)) {
                echo "El cliente se dio de alta con EXITO";
          } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          mysqli_close($conn);    
        }
        
        public function ActualizarCliente(){
            $sql =  "UPDATE clientes SET nombre ='$this->nombre', apellidop = '$this->apellidop', apellidom = '$this->apellidom', rfc = '$this->rfc' direccion = '$this->direccion', email = '$this->email', tel = '$this->tel'  WHERE id_cliente = '$this->id_cliente'";
            if (mysqli_query($conn, $sql)) {
                echo "ACTUALIZADO";
          } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          mysqli_close($conn);   
        }           

        public function EliminarCliente()
		{
			$sql = "DELETE FROM clientes WHERE id_cliente = '$this->id_cliente'";

			return $sql;		}
        

        public function VerCliente(){
            $sql= sprintf("SELECT * FROM cliente WHERE nombre = '%s'", $this->$nombre);
            return $sql;
        }
     }
    ?>