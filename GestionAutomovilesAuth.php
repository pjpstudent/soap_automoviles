<?php
class GestionAutomovilesAuth{
    private $con;
    private $IsAuthenticated;

    public function __construct() {
        $this->con = (is_null($this->con)) ? self::connect() : $this->con;
        $this->IsAuthenticated = false;
    }

    // singleton
    static function connect() {
        try {
            $user = //MYSQL USERNAME;
            $pass = //MYSQL PASSWORD;
            $dbname = "coches";
            $host = "localhost";

            $con = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $e) {
            print "<p>Error: " . $e->getMessage() . "</p>\n";
            return null;
            //exit();
        }
    }

    public function authenticate($header_params) {
        if ($header_params->username == 'username' && $header_params->password == 'password') {
            $this->IsAuthenticated = true;
            return true;
        } else {
            throw new SoapFault('Wrong user/pass combination', 401);
        }
    }

    public function ObtenerMarcasUrl(){
        if (is_null($this->con)) return "ERROR";
        if (!$this->IsAuthenticated) return "Not Authenticated";

        // using prepared statements
        $sql = "SELECT marca, url FROM `marcas`";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $stmt = null;
        return $res;
    }

    public function ObtenerModelosPorMarca($marca){
        if (is_null($this->con)) return "ERROR";
        if (!$this->IsAuthenticated) return "Not Authenticated";
          
        // using prepared statements
        $sql = "SELECT modelo FROM `modelos` where marca=(SELECT id FROM `marcas` where marca='".$marca[0]."')";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $stmt = null;
        return $res;
    }

} // end class
?>