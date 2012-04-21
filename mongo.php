<?php
try {
  //$m = new Mongo("mongodb://<username>:<password>@staff.mongohq.com:10038/app4191123"); // connect
  //$db = $m->learn;
  //$collection = $db->names;
  $m = new Mongo();
  $db = $m->selectDB('app4191123');
  $collection = $db->selectCollection('names');  
}
catch ( MongoConnectionException $e ) {
  echo '<p>Couldn\'t connect to mongodb.</p>';
  exit();
}
