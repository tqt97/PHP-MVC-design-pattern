<?php
declare(strict_types=1);


$section = $_GET['section'] ?? 'home';


if ($section == 'about-us') {
    include 'controller/aboutUsController.php';
} else if ($section == 'contact') {
    include 'controller/contactController.php';
} else {
    include 'controller/homeController.php';
}
