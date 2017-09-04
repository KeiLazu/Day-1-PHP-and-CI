<?php
    class MyKelas1 {
        public $obj1prop;

    }

    class MyKelas2 {
        public $obj2prop;

    }

    $object1 = new MyKelas1();
    $object1->obj1prop = 1;
    $object2 = new MyKelas2();
    $object2->obj2prop = 4;

    $serializedObj1 = serialize($object1);
    $serializedObj2 = serialize($object2);

    // default behavior that accepts all classes
    // second argument can be ommited
    // if allowed_classes is passed as false, unserialize converts all
    // object into __PHP_Incomplete_Class object

    $dat = unserialize($serializedObj1, ["allowed_classes" => true]);

    // converts all object into __PHP_Incomplete_Class object
    // except those of MyKelas1 and MyKelas2
    $data2 = unserialize($serializedObj2, ["allowed_classes" => ["MyKelas1", "MyKelas2"]]);

    print ($dat->obj1prop);
    echo "<br/>";
    print ($data2->obj2prop);

?>