<?php
include "../db.php";

$title = $_POST["title"];
$content = $_POST["content"];
$content_for = implode(explode("'", $content));


$topic = $_POST["topic"];
$add_password = $_POST["password"];




if ($add_password == $add_pass) {
  $pdo = db_connection();
  $insert = "INSERT INTO articles (title, topic, content, created_at) VALUES ('$title', '$topic', '$content_for', NOW())";

  $pdo->query($insert);
}



header("Location: ../index.php");
exit;