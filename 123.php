<?php
class A {
    public function printItem($string) {
        echo ' Hi : ' . $string; 
    } 
    public function printPHP() {
        echo '  I am from delhi' . PHP_EOL;
    }
}
class B extends A {
    public function printItem($string) {
        echo '<br>Hi: ' . $string . PHP_EOL;
    }
 public function printPHP() {
        echo "I am from haryana";
    }
}
$a = new A();
$b = new B();
$a->printItem('naman');
$a->printPHP();       
$b->printItem('manav'); 
$b->printPHP();       
?>