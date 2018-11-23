<?php

function d($var = ''){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

function ddd($var = ''){
    d($var);
    die();
}