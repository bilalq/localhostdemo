<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Handler</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8">
  </head>
  <body>
    <div class="well" id="content">
      <h1>Visitors include:</h1>
      <?php
        require_once 'mongo.php';

        $entry = $_POST['full_name'];
        $word = array("name" => $entry);
        $result = $collection->insert($word);
        $cursor = $collection->find();

        $output = "";
        $list = array();
        foreach ($cursor as $target) {
          array_push($list, $target);
        }

        foreach ($list as $foo) {
          echo "<h2>".$foo["name"]."</p>";
          echo "<br />";
        }
      ?>
    </div>
  </body>
</html>
