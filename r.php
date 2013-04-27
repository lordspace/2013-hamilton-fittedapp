<?php

$url = empty($_REQUEST['url']) ? '' : $_REQUEST['url'];

if (!preg_match('#\.google\.#si', $url)) {
    die('Invalid data.');
}

header('Location: ' . $url);
die;