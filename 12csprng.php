<?php
    
    // random bytes
    echo "Random Bytes: ";
    $bytes = random_bytes(5);
    print (bin2hex($bytes));
    echo "<br/>";

    // random integer
    echo "Random Integer: ";
    print (random_int(100,999));
    print ("");
    print (random_int(-1000,0));

?>