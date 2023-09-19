<?php
    
    class Crud{
        private $conexion;
        private $host = "localhost";
        private $usuario = "root";
        private $pass = "";
        private $bd = "agendados";

        public function __construct()
        {
         $this-> conexion = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->usuario, $this->pass);            
        }

        public function read(){
            $query = "SELECT contactos.id, contactos.nombre, contactos.telefono, contactos.email, 
                                categoria.categoria FROM contactos INNER JOIN categoria 
                                ON contactos.id_categoria = categoria.id_categoria";
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
        public function readCategoria(){
            $query = "SELECT * FROM categoria";
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //unset($this->conexion);
            return $result;
        }
        public function create($datos){
            $query = "INSERT INTO contactos(nombre,id_categoria,telefono,email,categoria) VALUES(:nombre,:id_categoria,:telefono,:email,:categoria)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->bindParam(":id_categoria", $datos["id_categoria"]);
            $stmt->bindParam(":telefono", $datos["telefono"]);
            $stmt->bindParam(":email", $datos["email"]);
            $stmt->bindParam(':categoria', $datos['categoria']);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }
        public function createCatergoria($datos){
            $query = "INSERT INTO categoria(categoria) VALUE(:categoria)";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":categoria", $datos["categoria"]);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt); 
        }
        public function update($datos){
            $query = "UPDATE contactos SET nombre=:nombre, id_categoria=:id_categoria, telefono=:telefono, email=:email, categoria=:categoria WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $datos["id"]);
            $stmt->bindParam(":nombre", $datos["nombre"]);
            $stmt->bindParam(":id_categoria", $datos["id_categoria"]);
            $stmt->bindParam(":telefono", $datos["telefono"]);
            $stmt->bindParam(":email", $datos["email"]);
            $stmt->bindParam(':categoria', $datos['categoria']);
            $stmt->execute();
            //unset($this->conexion);
            return $stmt;
        }
        public function updateCategoria($datos){
            $query = "UPDATE categoria SET categoria=:categoria WHERE id_categoria=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt-> bindParam(":id", $datos["id"]);
            $stmt-> bindParam(":categoria", $datos["categoria"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function delete($datos){
            $query = "DELETE FROM contactos WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $datos["id"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function deleteCategoria($datos){
            $query = "DELETE FROM categoria WHERE id_categoria=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $datos["id"]);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }
        public function show($id){
            $query = "SELECT * FROM contactos WHERE id=:id";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id", $id);
            $result = $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            //unset($this->conexion);
            return $result;
        }
        public function showCategoria($id){
            $query = "SELECT * FROM categoria WHERE id_categoria=:id_categoria";
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(":id_categoria", $id);
            $result = $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
    }

?>