<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'about':
        include 'about.php';
        break;
    case 'contact':
        include 'contact.php';
        break;
    default:
        include 'views/index.view.php';
        break;
}