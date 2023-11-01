<?php
class PeopleController {
    private $db;

    public function __construct() {
        // Replace with your PostgreSQL database credentials
        $this->db = new PDO("pgsql:host=silly.db.elephantsql.com;dbname=djfumrnu", "djfumrnu", "36IwgNmwytY-4kRUDqSDGw5q23HTpsNu");
    }

    

    public function list() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Retrieve the list of people from the PostgreSQL database
            $query = $this->db->query("SELECT name, age FROM info");
            $people = $query->fetchAll(PDO::FETCH_ASSOC);
            return $people;
        }
    }
    

}

?>
