<?php
$dbname = "employees.db";

$db = new SQLite3($dbname);

if(!$db){
    die('Error creatimg the database');
}else{
    //echo "Database has been created successflly";
}


?>