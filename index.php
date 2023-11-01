<?php
require __DIR__. '/src/controllers/PeopleController.php';

$controller = new PeopleController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action === 'list') {
        // Handle the "list" action
        $people = $controller->list();
        include __DIR__. '/src/views/people-list.php';
    } elseif ($action === 'add') {
        // Handle the "add" action
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->add();
            // Redirect to the "list" page after adding a person
            header("Location: /api/list");
        } else {
            include __DIR__. '/src/views/add-person.php';
        }
    }
} else {
    // Default action: list
    $people = $controller->list();
    include __DIR__. '/src/views/people-list.php';
}
?>
