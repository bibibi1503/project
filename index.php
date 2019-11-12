<?php
include "model/pdo.php";
include "model/catalog.php";
include "model/news.php";
// $dstt = loadblog();
include "view/header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($_GET['act']) {
        case 'about':
            include "view/about.php";
            break;
        case 'blog':
            include "view/blog.php";
            break;
        case 'contact':
            include "view/contact.php";
            break;
        case 'services':
            include "view/services.php";
            break;
        case 'testimonials':
            include "view/testimonials.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";


