<?php
include_once __DIR__ . "/../dat/Usuario.php";
include_once __DIR__ . "/../dat/Dinosaurio.php";

//Constantes para la conexion
define("SERVER_DB", "localhost");
define("DATABASE", "reino_prehistorico");
define("DB_USER", "root");
define("DB_PASSWD", "");

//Acceso a los datos
class AccesoDatos {
    private static $modelo = null;
    private $dbh = null;
    private $stmt_dinosaurios = null;
    private $stmt_dinosaurio = null;
    private $stmt_creauser = null;
    private $stmt_usuario  = null;
    private $stmt_añadirvoto  = null;
    private $stmt_comprobarvoto = null;
    
    public static function getModelo(){
        if (self::$modelo == null){
            self::$modelo = new AccesoDatos();
        }
        return self::$modelo;
    }
     
   //Constructor privado
    private function __construct(){  
        try {
            $dsn = "mysql:host=".SERVER_DB.";dbname=".DATABASE.";charset=utf8";
            $this->dbh = new PDO($dsn,DB_USER,DB_PASSWD);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbh->setAttribute( PDO::ATTR_EMULATE_PREPARES, FALSE );
        } catch (PDOException $e){
            echo "Error de conexión ".$e->getMessage();
            exit();
        }

        //Creacion y preparacion de las consultas
        $this->dbh->setAttribute( PDO::ATTR_EMULATE_PREPARES, FALSE );
        try {
        $this->stmt_dinosaurios  = $this->dbh->prepare("select e.nombre as nombre_era, p.nombre as nombre_periodo, d.*, count(v.id_dinosaurio) as total_votos
                                                        from dinosaurio d join periodo p on d.id_periodo = p.id join era e on e.id = p.id_era
                                                                left join voto v on v.id_dinosaurio = d.id where d.tipo =:tipo_dinosaurio and e.nombre = :nombre_era
                                                                group by d.id order by d.id");
        $this->stmt_dinosaurio = $this->dbh->prepare("select e.nombre as nombre_era, p.nombre as nombre_periodo, d.* 
                                                        from dinosaurio d join periodo p on d.id_periodo = p.id join era e on e.id = p.id_era 
                                                        where d.id =:id_dinosaurio");
        $this->stmt_creauser  = $this->dbh->prepare("insert into Usuario (nombre,hash_contrasena,correo) values(?,?,?)");
        $this->stmt_usuario   = $this->dbh->prepare("select * from Usuario where nombre = :nombre_usuario");
        $this->stmt_añadirvoto   = $this->dbh->prepare("insert into Voto (id_usuario, id_dinosaurio) values(:id_usuario, :id_dinosaurio)");
        $this->stmt_comprobarvoto = $this->dbh->prepare("select * from voto where id_usuario =:id_usuario and id_dinosaurio =:id_dinosaurio");
        } catch ( PDOException $e){
            echo " Error al crear la sentencias ".$e->getMessage();
            exit(); 
        }
    }

    //Cierre de la conexión
    public static function closeModelo(){
        if (self::$modelo != null){
            $obj = self::$modelo;
            $obj->stmt_dinosaurio = null;
            $obj->stmt_dinosaurios = null;
            $obj->stmt_creauser = null;
            $obj->stmt_usuario  = null;
            $obj->stmt_añadirvoto  = null;
            $obj->stmt_comprobarvoto = null;
            self::$modelo = null; 
        }
    }

    //Devuelvo la lista de Dinosaurios segun el tipo que sea(Terrestre,Acuatico o Volador),a la era que pertenezca y cantidad de votos
    public function getDinosaurios ($tipo, $era):array {
        $tdinosaurio = [];
        $this->stmt_dinosaurios->setFetchMode(PDO::FETCH_CLASS, 'Dinosaurio');
        $this->stmt_dinosaurios->bindParam(':tipo_dinosaurio', $tipo);
        $this->stmt_dinosaurios->bindParam(':nombre_era', $era);
        if ( $this->stmt_dinosaurios->execute() ){
            while ( $dinosaurio = $this->stmt_dinosaurios->fetch()){
               $tdinosaurio[]= $dinosaurio;
            }
        }
        return $tdinosaurio;
    }

    //Obtener dinosaurio por el ID
    public function getDinosaurio($id) {
        $dino = false; 

        $this->stmt_dinosaurio->setFetchMode(PDO::FETCH_CLASS, 'Dinosaurio');
        $this->stmt_dinosaurio->bindParam(':id_dinosaurio', $id);
        if ( $this->stmt_dinosaurio->execute() ){
             if ( $obj = $this->stmt_dinosaurio->fetch()){
                $dino= $obj;
            }
        }
        return $dino;
    }
    
    //Dar de alta a un usuario
    public function addUsuario($user):bool{
        $this->stmt_creauser->execute( [$user->nombre, $user->hash_contrasena, $user->correo]);
        $resu = ($this->stmt_creauser->rowCount () == 1);
        return $resu;
    }

    //Devuelvo un usuario o false
    public function getUsuario (String $login) {
        $user = false;
        
        $this->stmt_usuario->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $this->stmt_usuario->bindParam(':nombre_usuario', $login);
        if ( $this->stmt_usuario->execute() ){
             if ( $obj = $this->stmt_usuario->fetch()){
                $user= $obj;
            }
        }
        return $user;
    }

    //Votar por dinosaurio
    public function votarDinosaurio($id_usuario,$id_dinosaurio):bool{
        $this->stmt_añadirvoto->bindParam(':id_usuario', $id_usuario);
        $this->stmt_añadirvoto->bindParam(':id_dinosaurio', $id_dinosaurio);
        $this->stmt_añadirvoto->execute();
        $resu = ($this->stmt_añadirvoto->rowCount () == 1);
        return $resu;
    }

    //Para verificar si ya voto el usuario
    public function yaVoto($id_usuario,$id_dinosaurio):bool {
        $resu = false;
        $this->stmt_comprobarvoto->bindParam(':id_usuario', $id_usuario);
        $this->stmt_comprobarvoto->bindParam(':id_dinosaurio', $id_dinosaurio);
        $this->stmt_comprobarvoto->execute();
        if($this->stmt_comprobarvoto->fetch()) {
            $resu = true;
        }
        return $resu;
    }

     // Evito que se pueda clonar el objeto
    public function __clone(){ 
        trigger_error('La clonación no permitida', E_USER_ERROR); 
    }
}
?>