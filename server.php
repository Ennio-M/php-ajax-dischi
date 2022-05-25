<?php
    include __DIR__.'/database.php';
    //var_dump($data);

    header('Content-Type: application/json');
    echo json_encode($data);
?>