<?php
  include_once 'models/config.php';
  include_once 'models/photo.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ГАЛЕРЕЯ</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>ГАЛЕРЕЯ</h1>
  </header>


  <div class="images">
    <?php for ($i=0; $i < count($images); $i++) : ?>
      <a href="image.php?photo=<?=$images[$i] ?>">
        <img src="<?=PHOTO_SMALL.$images[$i] ?>">
      </a>
    <?php endfor; ?>
  </div>
 
</body>
</html>
