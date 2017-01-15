<?php

require('vendor/autoload.php');

if (isset($_GET['p'])) {
    $_SERVER['REQUEST_URI'] = $_GET['p'];
    unset($_GET['p']);
}

Kispiox\Kispiox::start();

