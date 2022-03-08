<?php
require_once './autoload.php';
include('./views/includes/alerts.php');
require_once './Controller/UsersController.php';
require_once './Controller/HomeController.php';
require_once './Controller/ReservationsController.php';



    $home = new HomeController();
    // $home->index($_GET['page']);

    $pages = ['home' , 'login' , 'register' , 'avaibleflights' , 'booking' , 'book' , 'reserve' , 'logout'];
    if(isset($_GET['page'])) {
        if(in_array($_GET['page'],$pages)) {
            $page =  $_GET['page'];
            $home->index($page);
        }
        else {
            include('views/includes/404.php');
        }
    } else {
        $home->index('home');
    }
    
?>