<?php

class Controller{
    function __construct()
    {

    }
    function view($viewUrl){

        require ('views/'.$viewUrl);
    }
}
?>