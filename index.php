<?php
    include('./views/includes/alerts.php');
    require_once './autoload.php';
    require_once './Controller/HomeController.php';
    require_once 'Database/DB.php';


    $home = new HomeController();
    // $home->index($_GET['page']);

    $pages = ['home' , 'login' , 'register' , 'avaibleflights' , 'booking' , 'book' , 'reserve' , 'logout' , 'myreservation' , 'cancel', 
    'loginadmin' ,'admin', 'addflight' , 'update' , 'delete' , 'reservations', 'cancelreservation'];
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
    