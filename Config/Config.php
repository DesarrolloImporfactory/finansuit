<?php

$host = $_SERVER['HTTP_HOST'] == "localhost" ? "localhost" : "localhost";
$user = $_SERVER['HTTP_HOST'] == "localhost" ? "root" : "imporsuit_financiero";
$password = $_SERVER['HTTP_HOST'] == "localhost" ? "" : "imporsuit_financiero";
$db = $_SERVER['HTTP_HOST'] == "localhost" ? "imporsuit_finanzas" : "imporsuit_financiero";

define("HOST", $host);
define("USER", $user);
define("PASSWORD", $password);
define("DB", $db);
define("CHARSET", "utf8");

// obtienen la url del proyecto para hacer peticiones ajax

// Definir una variable en lugar de una constante para BASE_URL
$baseUrl = $_SERVER['HTTP_HOST'] == "localhost" ? "http://localhost/finan/" : "https://financiero.imporsuit.com/";

// Si necesitas usarlo como constante en alguna parte del código
define('BASE_URL', $baseUrl);
