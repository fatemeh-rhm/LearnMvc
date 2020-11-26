<?php

class  one
{

    public $variable1 = "code1";
    protected $variable2 = "code2";
    private $variable3 = "code3";

/*    const website = "programit.ir";*/

    function __construct()
    {
        define("website2","programit2.ir");
/*        echo self::website;*/
    }

    function methode1()
    {
        echo "methode1***$$@@" . $this->variable1;
    }

     function methode2()
    {
        echo "methode2";
    }

    function methode3()
    {
        echo "methode3";
    }
}

class two extends one
{
    function test_methode1()
    {
        echo "test_methode1***" . $this->variable2;

        echo "test_methode1***" . $this->methode1();
    }

}
class three{
    static function test3_methode1()
    {
        echo "test3_methode1";
    }
}

$test2 = new two();
echo website2;
"<hr>";
/*echo one::website;*/

/*$test2->test_methode1();*/
three::test3_methode1();
?>

