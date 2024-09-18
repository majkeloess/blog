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
  <title>Sati add</title>
</head>

<body>
  <div class="navigation-details">
    <h1 class="header-text poppins-medium">Sati</h1>
  </div>

  <div class="articles">
    <div class="articles-wrapper-det">
      <div class="backarrow">
        <a href="/index.php"><i class="fa-solid fa-arrow-left"></i></a>
      </div>

      <div class="content-box">
        <div class="text-header">
          <h2 class="articles-header-text poppins-semibold">Add article</h2>
          <div class="box-item-footer">
            <p class="box-item-footer-text poppins-light">Fill all gaps. After clicking submit, the article will be
              loaded into the page.</p>
          </div>
        </div>
        <div class="form-box">
          <form action="utilites/db.php" method="post">
            <div class="form-row">

              <label class="form-label poppins-medium" for="title">Title</label>
              <input class="input-smaller poppins-regular" type="text" id="title" name="title" required>
            </div>
            <div class="form-row">
              <label class="form-label poppins-medium" for="type">Topic</label>
              <input class="input-smaller poppins-regular" type="text" id="type" name="type" required>
            </div>
            <div class="form-row">
              <label class="form-label poppins-medium" for="content">Content</label>
              <textarea class="input-larger poppins-regular" type="content" id="content" name="content"
                required></textarea>
            </div>
            <button class="form-button poppins-semibold" type="submit" value="Wyślij">Submit</button>

          </form>
        </div>
      </div>


    </div>
  </div>
  <footer class="footer-add poppins-regular">©2024 <a target="_blank" href="https://www.majkeloess.dev/">majkeloess</a>
  </footer>
</body>

</html>