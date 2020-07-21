<?php

function makeEditUrl($path){
    $parsed = parse_url($path);
    $parts = implode('-',explode('/',$parsed['path']));
    return ltrim($parts, '-');
}

function getEditUrl($path){
    return str_replace('-','/',$path);
}
