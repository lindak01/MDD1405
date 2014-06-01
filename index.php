<?php

require_once "models/views.php";


$view = new view();

$view->show('header');

if(!empty($_GET["action"])){
    if($_GET["action"]=="home"){
        $view->show('body');
    }elseif($_GET["action"]=="about"){
        $view->show('about');
    }elseif($_GET["action"]=="contact"){
        $view->show('contact');
    }elseif($_GET["action"]=="projects"){
        $view->show('projects');
    }elseif($_GET["action"]=="hkweather"){
        $view->show('phkweather');
    }elseif($_GET["action"]=="ascalculator"){
        $view->show('pascalculator');
    }elseif($_GET["action"]=="wowm"){
        $view->show('pwowm');
    }elseif($_GET["action"]=="fsadv"){
        $view->show('pfsadv');
    }elseif($_GET["action"]=="cswebsite"){
        $view->show('pcswebsite');
    }elseif($_GET["action"]=="audioapp"){
        $view->show('paudioapp');
    }elseif($_GET["action"]=="picviewer"){
        $view->show('ppicviewer');
    }elseif($_GET["action"]=="macwebsite"){
        $view->show('pmacwebsite');
    }elseif($_GET["action"]=="bbswebsite"){
        $view->show('pbbswebsite');
    }elseif($_GET["action"]=="vacationcomm"){
        $view->show('pvacationcomm');
    }
}else{
    $view->show('body');
}

$view->show('footer');

?>