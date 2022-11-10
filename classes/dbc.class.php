<?Php

class Dbc {
    private $webserver = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "onlineshoping";

    protected function connection() {
        $db_con = new mysqli($this->webserver, $this->user, $this->password, $this->db_name);
        return $db_con;
        } 
}

// $db_con = 'mysql:host' . $this->webserver . 'db_name' . $this->db_name;
    // $db = new PDO($db_con, $this->user, $this->password);
    // $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // return $db;