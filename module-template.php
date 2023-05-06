<?php
require_once 'Database.php';

$db = new Database('path/to/your/database.sqlite');

// Fetch all rows from the 'projects' table
$projects = $db->fetchAll("SELECT * FROM projects");

// Fetch a single row from the 'projects' table by its 'id'
$project = $db->fetchOne("SELECT * FROM projects WHERE id = :id", ['id' => 1]);

// Insert a new project into the 'projects' table
$db->query("INSERT INTO projects (name, description) VALUES (:name, :description)", ['name' => 'Project 1', 'description' => 'Project 1 description']);

// Update a project's name and description in the 'projects' table by its 'id'
$db->query("UPDATE projects SET name = :name, description = :description WHERE id = :id", ['name' => 'Updated Project 1', 'description' => 'Updated Project 1 description', 'id' => 1]);

// Delete a project from the 'projects' table by its 'id'
$db->query("DELETE FROM projects WHERE id = :id", ['id' => 1]);
?>
