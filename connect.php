<?php

try{
    $dbh = new PDO("mysql:host=localhost;dbname=sa000822680",
    "root",
     "");
}
catch(Exception $e){
    die("ERROR: Couldn't connect.{$e->getMessage()}");
}

