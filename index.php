<!-- Dispatcher de se site -->
<?php 
$adress=explode("/",$_SERVER['REQUEST_URI']);

switch($adress[3]):

    case 'home-page':
        require_once('view/home-page.php');
        break;

    default:
        include('view/404.php');
        break;
        
endswitch;