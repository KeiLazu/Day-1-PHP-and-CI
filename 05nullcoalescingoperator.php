<?php
    // fetch the value of $_GET['pengguna'] and returns 'not passed'
    // if username is not passed
    $namapengguna = $_GET['pengguna'] ?? 'kosong';
    print($namapengguna);
    print("<br/>");

    //equivalent code using ternary operator
    $namapengguna = isset($_GET['pengguna']) ? $_GET['pengguna'] : 'empty';
    print($namapengguna);
    print("<br/>");

    // chaining ?? operation
    $namapengguna = $_GET['pengguna'] ?? $_POST['pengguna'] ?? 'ga di lempar';
    print ($namapengguna);

?>