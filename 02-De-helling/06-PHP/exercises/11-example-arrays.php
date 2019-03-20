<?php
$items = array();
$items[] = 'home';
$items[] = 'about';
$items[] = 'contact';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <ul>
    <?php
    foreach($items as $item) {
      echo '<li>' . $item . '</li>';
    }
    ?>
    </ul>
  </body>
</html>
