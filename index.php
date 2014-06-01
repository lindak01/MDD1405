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
    }
}else{
    $view->show('body');
}

$view->show('footer');

?>