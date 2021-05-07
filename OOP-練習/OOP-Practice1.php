<?php
class MyValue {
    protected $value;  //継承したクラスまで参照可能な protected を指定
    public function __construct($value) {
        $this->value = $value;
    }
public function showValue() {
    echo '値は ' . $this->value . ' です。<br>';
    }
}
class MySubValue extends MyValue {  //MyValue を継承
    public function showValue() {  //showValue()を上書き（オーバーライド）
    echo 'The value is ' .$this->value . '. <br>';
    }
}
 
$obj1 = new MyValue('PHP');
$obj1->showValue();
$obj2 = new MySubValue('"Java"');
$obj2->showValue();
?>