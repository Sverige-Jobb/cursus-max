<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BeCode</title>
  </head>
  <body>
    <ul>
    <?php
    $items = array('home', 'about', 'contact');
    foreach($items as $item) {
      echo '<li>' . $item . '</li>';
    }
    ?>
    </ul>
  </body>
</html>
