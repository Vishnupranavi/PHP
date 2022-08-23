<?php
session_start();
require "../app/router.php";
require "../model/DBConnection.php";
$dataBase = new DBConnection();
$Router = new Router();
?>
