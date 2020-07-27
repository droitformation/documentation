<?php

function makeEditUrl($path){
    $parsed = parse_url($path);
    $parts  = explode('/',$parsed['path']);

    return end($parts);
}

function getEditUrl($path){
    return 'docs/System/'.$path;
}
