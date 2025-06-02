<?php

if ($_SERVER['SERVER_NAME'] === 'www.manicuretop.com.br' || $_SERVER['SERVER_NAME'] === 'manicuretop.com.br') {
    $BASE_URL = "https://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
} else {
    $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
}

  	define('TITLE', 'Esther Silva Unhas');