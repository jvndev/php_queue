<?php
    require('./Queue.php');

    $queue = new Queue();

    echo "populating...\n";
    foreach ([1, 2, 3, 4, 5] as $e){
        echo $queue . "\n";
        $queue->enqueue($e);
        echo $queue . "\n\n";
    }

    echo "emptying...\n";
    while (!$queue->isEmpty()) {
        echo $queue . "\n";
        echo $queue->dequeue() . "\n";
        echo $queue . "\n\n";
    }