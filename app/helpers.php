<?php

function makeEditUrl($path){

    $path = str_replace('https://library.test/docs/System/','',$path);
    $path = str_replace('https://library.droitne.ch/docs/System/','',$path);

    return str_replace('/','&',$path);
}

function getEditUrl($path){
    $path = str_replace('&','/',$path);
    return 'docs/System/'.$path;
}
