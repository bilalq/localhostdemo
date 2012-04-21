<?php
try {
  $m = new Mongo(); // connect
  //$db = $m->learn;
  //$collection = $db->names;
  $db = $m->selectDB('learn');
  $collection = $db->selectCollection('names');  
}
catch ( MongoConnectionException $e ) {
  echo '<p>Couldn\'t connect to mongodb.</p>';
  exit();
}
