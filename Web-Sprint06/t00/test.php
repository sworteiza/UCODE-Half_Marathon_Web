<?php
    function autoload($pClassName)
    {
        include(__DIR__. "/". $pClassName. ".php");
    }
    spl_autoload_register("autoload");
    $list= new LList();
    $list->addArr([100, 1, 2, 3, 100, 4, 5, 100]);
    $list->removeAll(100);
    $list->add(10);
    echo $list->contains(10) . "\n"; // 1
    echo $list->toString() . "\n";
    $list->clear();
    echo $list->toString() . "\n";
?>