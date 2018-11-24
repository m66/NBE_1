<?php

session_start();

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "en";
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "en") {
            $_SESSION['lang'] = "en";
//            $en
        }
        else if ($_GET['lang'] == "hy") {
            $_SESSION['lang'] = "hy";
        }
        else if ($_GET['lang'] == "rs") {
            $_SESSION['lang'] = "rs";
        }
    }

    require_once "php/languages/" . $_SESSION['lang'] . ".php";
?>