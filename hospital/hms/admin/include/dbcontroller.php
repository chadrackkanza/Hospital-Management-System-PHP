<?php
$DB_host = "localhost";
// define('DB_SERVER','localhost:8889');
$DB_user = "root";
$DB_pass = "root";
$DB_pass = ")6A5ELakk.";
$DB_name = "hms";
try
{
 $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 $e->getMessage();
}
?>