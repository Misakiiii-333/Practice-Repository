<?php
 class Student {

    public $name;

    function avg($math, $english) {
        echo(($math + $english) / 2)."\n";
    }
}

$a001 = new Student();
$a001->avg(80,70);
$a001->name = "sato";
echo $a001->name."\n";

?>
