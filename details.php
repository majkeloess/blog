<?php
include "./db.php";
include "utilities/date_formatter.php";
include "utilities/wordMinConvert.php";

$data = db_select_by_id($_GET["id"]);
$date = explode(" ", $data["created_at"])[0];
$formatted = date_formatter($date);

$words = explode(" ", $data["content"]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <title><?= $data["title"]; ?></title>
</head>

<body>
  <div class="navigation-details">
    <h1 class="header-text poppins-medium">Sati</h1>
    <p class="header-det poppins-medium"><?= $data["topic"] ?></p>
  </div>

  <div class="articles">
    <div class="articles-wrapper-det">
      <div class="backarrow">
        <a href="/index.php"><i class="fa-solid fa-arrow-left"></i></a>
      </div>
      <div class="content-box">

        <div class="text-header">
          <h2 class="articles-header-text poppins-semibold"><?= $data["title"] ?></h2>
          <div class="box-item-footer">
            <p class="box-item-footer-text poppins-light"><?= $formatted ?></p>
            <p class="box-item-footer-text poppins-light"><?php echo wordMinConvert(count($words)); ?> min</p>
          </div>
        </div>
        <p class="text">
          <?= $data["content"] ?>
        </p>
      </div>

    </div>
  </div>


</body>

</html>