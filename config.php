<?php

session_start();

function app_redirect($url) {
    header('Location: ' . $url);
    die;
}