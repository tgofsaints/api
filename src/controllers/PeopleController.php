<?php
class PeopleController {
    private $db;

    public function __construct() {
        // Replace with your PostgreSQL database credentials
        $this->db = new PDO("pgsql:host=silly.db.elephantsql.com;dbname=djfumrnu", "djfumrnu", "36IwgNmwytY-4kRUDqSDGw5q23HTpsNu");
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Handle POST request to add a person
            $name = $_POST['name'];
            $age = $_POST['age'];

            // Insert the person into the PostgreSQL database
            $query = $this->db->prepare("INSERT INTO info (name, age) VALUES (:name, :age)");
            $query->bindParam(':name', $name);
            $query->bindParam(':age', $age);
            $query->execute();
        }
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
