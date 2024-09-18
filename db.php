<?php
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$dsn = $_ENV['DB_DSN'];
$user = $_ENV['DB_USER'];
$password = $_ENV['DB_PASSWORD'];
$add_pass = $_ENV['ADD_PASS'];


$select_all = "SELECT * FROM articles";
$count = "SELECT COUNT (*) FROM articles";



function db_connection()
{
  global $dsn, $user, $password;

  try {
    $pdo = new PDO($dsn, $user, $password);
    return $pdo;

  } catch (PDOException $e) {
    echo "Connection fail:  " . $e->getMessage();
    die($e->getMessage());
  }

}

function db_select_by_id($id)
{
  $query = "SELECT title, topic, content, created_at FROM articles a WHERE a.id = $id";

  $pdo = db_connection();

  $data = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

  return $data[0];
}