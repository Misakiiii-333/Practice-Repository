<?php
class taxClass
{
    public static $varTax = 0.05;
    function func_tax( $var ) {
        return $var * ( 1 + self::$varTax );
    }
}
class echoTaxClass extends taxClass
{
    function func_echo( $var ) {
        echo '税込：' . $this->func_tax( $var ) . '円<br />';
        echo '税率：' . parent::$varTax * 100 . '％<br />';
    }
}
$var_class = new echoTaxClass();
$var_class->func_echo( 100 );
?>
