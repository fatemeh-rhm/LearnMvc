<?php

class index extends Controller
{

    function __construct()
    {
/*        echo "controller index";*/

    }

    function index(){

        $this->view('index/index.php');
/*        echo "controller index";*/
    }

    function user($age,$mobile,$city){
        echo "age is :".$age."<br>";
        echo "mobile is :".$mobile."<br>";
        echo "city is :".$city."<br>";
    }


}


?>


