<?php
include "utilities/wordMinConvert.php";
include "db.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <title>Sati blog</title>
</head>


<body>

  <div class="navigation">
    <h1 class="header-text poppins-medium">Sati</h1>
    <a href="./add.php">
      <p class="header-add poppins-regular">Add</p>
    </a>
  </div>

  <div class="articles">
    <div class="articles-wrapper">
      <?php

      $pdo = db_connection();
      $items = $pdo->query($count)->fetchColumn();

      ?>
      <div class="articles-header">
        <h2 class="articles-header-text poppins-semibold">Stories</h2>
        <p class="articles-header-subtext poppins-regular"><?= $items ?> articles</p>
      </div>
      <ul class="box">
        <?php



        foreach ($pdo->query($select_all) as $row):
          $id = $row["id"];
          $words = explode(" ", $row["content"]);
          $content_prev = "";
          $date = explode(" ", $row["created_at"]);
          $date = $date[0];


          for ($i = 0; $i < 30; $i += 1) {
            $content_prev .= $words[$i] . " ";
          }

          $content_prev .= "...";

          ?>
          <li class="box-item">
            <a href=<?php echo "./details.php?id=$id" ?>>

              <p class="box-item-cat poppins-regular"><?= strtoupper($row["topic"]) ?></p>
              <p class="box-item-title poppins-medium"><?= $row["title"] ?></p>
              <p class="box-item-content"><?= $content_prev ?></p>
              <div class="box-item-footer">
                <p class="box-item-footer-text poppins-light"><?= $date ?></p>
                <p class="box-item-footer-text poppins-light"><?= wordMinConvert(count($words)) ?> min</p>
              </div>
            </a>
          </li>
        <?php endforeach; ?>

      </ul>
    </div>


  </div>

  <footer class="footer poppins-regular">©2024 <a target="_blank" class="footer-a"
      href="https://www.majkeloess.dev/">majkeloess</a>
  </footer>
</body>

</html>