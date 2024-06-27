<?php
if (isset($_GET['id'])) {
    $idToDelete = $_GET['id'];

    $jsonString = file_get_contents('testminat.json');

    $proyek = json_decode($jsonString, true);

    foreach ($proyek as $key => $project) {
        if ($project['id'] == $idToDelete) {
            unset($proyek[$key]);
            break;
        }
    }

    $updatedJsonString = json_encode($proyek);

    file_put_contents('testminat.json', $updatedJsonString);

    header('Location: data.php');
    exit();
} else {
    header('Location: data.php');
    exit();
}
