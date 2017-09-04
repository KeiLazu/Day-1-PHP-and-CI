<?php
    // coercive mode
    function summary(int ...$ints) {
        return array_sum($ints);

    }
    print(summary(2,'3',4.1));

    // output is 9

?>