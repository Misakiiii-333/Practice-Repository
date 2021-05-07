<?php 
class IdentifyAnimal
{
    private $_cry;
    private $_size;

    function setCry($cry)
    {
        $this->_cry = $cry;

        return $this; // 自分自身のインスタンスを返す
    }

    function setSize($size)
    {
        $this->_size = $size;

        return $this; // 自分自身のインスタンスを返す
    }

    function getName()
    {
        if ($this->_cry == "にゃー" && $this->_size == "small") {
            $name = "猫です。";
        }else if ($this->_cry == "わん" && $this->size == "middle") {
            $name = "犬です。";
        }else if ($this->_cry == "がおー" && $this->size == "big") {
            $name = "ライオンです。";
        }else{
            $name = "おそらく人です。";
        }

        return $name;
    }
}
//doAction.php
require "animal.php";

$animal = new IdentifyAnimal;
$setThings = $animal->setCry("にゃー")->setSize("small");

echo $animal->getName(); //猫です。

?>