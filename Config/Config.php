<?php

const HOST = '127.0.0.1';
const USER = "root";
const PASSWORD = "";
const DB = "imporsuit_finanzas";
const CHARSET = "utf8";
// obtienen la url del proyecto para hacer peticiones ajax

// Definir una variable en lugar de una constante para BASE_URL
$baseUrl = $_SERVER['HTTP_HOST'] == "localhost" ? "http://localhost/finan/" : "https://finanzas.imporsuit.com/";

// Si necesitas usarlo como constante en alguna parte del código
define('BASE_URL', $baseUrl);
