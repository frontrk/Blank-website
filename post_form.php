<?php
    require 'connection.php';
    require 'header.php';
    include 'partials/section_one.php';
?>
<section id="form">
<form action="" method="POST">
  <div class="form-group">
    <input type="text" name="title" class="form-control" placeholder="wpisz tytul wpisu">
  </div>


  <div class="form-group">
  <textarea name="content" cols="30" rows="10" placeholder="wpisz tresc wpisu"></textarea>
 </div>

  </div>
  <button type="submit" class="btn btn-primary">dodaj wpis</button>
</form>
</section>

<?php

if (isset($_POST['title'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];

    echo $title;
    echo $content;

    $add_post_str = "
    INSERT INTO posts (id, title, content) VALUES (
            NULL, '$title', '$content');";
    
    $add_post = mysqli_query($link,$add_post_str);
    var_dump($add_post == true) {
      echo "gratulacje";
    } else {
      echo "nie wyszlo";
    }
}



?>