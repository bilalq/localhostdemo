<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Handler</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8">
  </head>
  <body>
  <?php
    require_once 'mongo.php';

    $entry = $_POST['full_name'];
    $collection->insert($entry);
    $cursor = $collection->find();

    $output = "";
    foreach ($cursor as $target) {
      $output = '<p>'.$target.'</p><br />';
    }
    echo $output;
    echo "Handler loading";
  ?>
  </body>
</html>
