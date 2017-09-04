<?php
    // strict mode
    declare(strict_types=1);
    function sum(int ...$ints) {
        return array_sum($ints);

    }
    print(sum(2,'3',4.1));

    // it's output is error, need to be integer, fully integer

?>