<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title>My first blog</title>
  <link rel="stylesheet" href="../style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>My first blog</h1>    
    <div>
<!-- форма для додавання поста (запису) -->
<!-- method="post" яким способом будуть передаватись параметри (post будуть передаватись в http залоговку, а не в url рядку) -->
<!-- action="index.php" говорить про те, що дані потрібно передавати скрипту index.php 
(?action= $_GET['action'] зчитує параметер 'action' з url (add або edit) та відправляє інформацію по адресі (add або edit))
(&id= $_GET['id'] щоб зрозуміти яку саме статтю потрібно редагувати-->
<?php 
    echo $_SERVER['PHP_SELF'];
    ?>
    <form method="post" action="index.php?action=add">

    <div class="mb-3">
      <label class="form-label">
        Title
        <input type="text" name="title" value="" class="form-item form-control" autofocus require>
      </label>
    </div>
      <div class="mb-3">
      <label class="form-label">
        Date
        <input type="date" name="date" value="" class="form-item form-control" require>
      </label>
      </div>
      <div class="mb-3">
      <label class="form-label">
        Content
        <textarea name="content" class="form-item form-control" require></textarea>
      </label>
      </div>
      <div class="mb-3">
      <input type="submit" value="Save" class="btn btn-primary">
      </div>
    </form>

    </div>
    <footer>
      <p>My first blog <br> Copyright &copy; 2023</p>
    </footer>
  </div>
</body>

</html>