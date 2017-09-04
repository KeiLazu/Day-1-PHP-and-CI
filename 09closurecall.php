<?php
    echo "PRE PHP 7<br/><br/>";

    class A {
        private $x = 1;
    }

    // define a closure pre PHP 7 code
    $getVal = function() {
        return $this->x;
    };

    // Binding closure
    $val = $getVal->bindTo(new A, 'A');
    
    print ($val());

    // output:
    // 1

    echo "<br/><br/>PHP 7+<br/><br/>";

    class B {
        private $y = 1;

    }

    // define 7+ code
    $value = function() {
        return $this->y;
    };

    print ($value->call(new B));

?>