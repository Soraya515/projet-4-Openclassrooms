<?php

session_start();

$inactive = 600;


if (isset($_SESSION['timeout'])){

    $session_life = time() - $_SESSION['start'];
    if($session_life > $inactive){

    session_destroy():
    header("location: accueil.php");

    }
}
$_SESSION['timeout'] = time();

?>


