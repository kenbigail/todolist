<?php

// Konfigurasi Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "skl_todo_list";

$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die ("koneksi gagal terhubung" . $con->connect_error);
}

// Get Data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM tasks";
    $result = $con->query($sql);

    $todos = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()){
            $todos[] = $row;
        }
    }
    // convert data ke json
    echo json_encode($todos);

// Create Data
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"));

    $task = $data->task;

    $sql = "INSERT INTO tasks (task_name) VALUES ('$task')";
    $con->query($sql); 

// Membuat Status Completed
} elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $id = $_GET['id'];
    $sql = "UPDATE tasks SET completed = NOT completed WHERE id = $id";
    $con->query($sql);

    // delete data
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];

    $sql = "DELETE FROM tasks WHERE id = $id";
    $con->query($sql);
}

$con->close();
?>