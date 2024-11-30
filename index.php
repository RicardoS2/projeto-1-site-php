<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <header>
    <?php foreach ($pages as $key => $value) {
        echo '<a href="?page=' . $key . '">' . ucfirst($key) . '</a> ';
    } ?>
  </header>

  <section>
  </section>

  <p><?php echo $pages[$page]; ?></p>
</body>

</html>