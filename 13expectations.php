<?php
    ini_set('asset.exception', 1);

    class KustomError extends AssertionError {}

    assert(false, new KustomError('You genius little brat!'));

?>