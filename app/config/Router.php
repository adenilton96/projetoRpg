<?php

$this->get('/', function(){
    echo 'home';
});


$this->get('/home', function(){
    echo 'estou na home';
});

$this->get('/about/test', function(){
    echo 'estou na about test';
});

$this->get('/categoria','MyController@method');
