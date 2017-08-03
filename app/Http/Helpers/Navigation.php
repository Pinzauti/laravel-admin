<?php


function isActiveRoute($route, $output = 'nav-active')
{
    if (Route::currentRouteName() == $route) {
        return $output;
    }
}