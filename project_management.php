<?php
require_once 'config.php';
require_once 'Database.php';

$db = new Database(DB_FILE);

function getAllProjects($db) {
    return $db->fetchAll("SELECT * FROM projects");
}

function getProjectById($db, $id) {
    return $db->fetchOne("SELECT * FROM projects WHERE id = :id", ['id' => $id]);
}

function createProject($db, $name, $description) {
    $db->query("INSERT INTO projects (name, description) VALUES (:name, :description)", ['name' => $name, 'description' => $description]);
}

function updateProject($db, $id, $name, $description) {
    $db->query("UPDATE projects SET name = :name, description = :description WHERE id = :id", ['name' => $name, 'description' => $description, 'id' => $id]);
}

function deleteProject($db, $id) {
    $db->query("DELETE FROM projects WHERE id = :id", ['id' => $id]);
}

?>
