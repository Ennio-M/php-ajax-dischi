<?php
    include __DIR__.'/database.php';
    //var_dump($data);
    $result = [];

    if(isset($_GET['genre'])) {
        foreach($data as $album) {
            if($album['genre'] == $_GET['genre']) {
                $result[] = $album;
            }
        }
    } else {
        $result = $data;
    }

    header('Content-Type: application/json');
    echo json_encode($result);
?>