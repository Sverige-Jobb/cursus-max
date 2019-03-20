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
    foreach($items as $index => $item) {
      echo '<li>' . $index . ' - ' . $item . '</li>';
    }
    ?>
    </ul>
  </body>
</html>
