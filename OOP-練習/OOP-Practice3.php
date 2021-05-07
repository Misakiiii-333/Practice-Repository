<?php
//  名前クラス
class foo {
    private $firstName;     // ファーストネーム
    private $lastName;      // ラストネーム
 
    //  ファーストネーム設定
    public function setFirstName($value = '')
    {
        $this->firstName = $value;
        return $this;       // 自分自身のインスタンスを返す
    }
 
    //  ラストネーム設定
    public function setLastName($value = '')
    {
        $this->lastName = $value;
        return $this;       // 自分自身のインスタンスを返す
    }
 
    //  フルネーム取得
    public function getFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }
 
    public function getFirstName()
    {
        return $this->firstName;
    }
 
    public function getLastName()
    {
        return $this->lastName;
    }
}
 
// foo オブジェクト作成
$objFoo = new foo();
 
// 「二宮 和也」の名前設定
$objFoo->setFirstName('和也')->setLastName('二宮');
 
// 名前全体を取得
echo "名前全体:".$objFoo->getFullName();
?>