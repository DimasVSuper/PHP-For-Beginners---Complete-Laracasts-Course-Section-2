<?php

include 'functions.php';

$URI = $_SERVER['REQUEST_URI'];

if($URI === '/'){
    require 'controllers/index.php';
} else if($URI === '/about'){
    require 'controllers/about.php';
} else if($URI === '/contact'){
    require 'controllers/contact.php';
} else {
    require 'views/404.view.php';
}