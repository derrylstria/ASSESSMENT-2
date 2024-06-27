<?php
if (isset($_POST['id'])) {
    $idToUpdate = $_POST['id'];

    $jsonString = file_get_contents('testminat.json');
    $data = json_decode($jsonString, true);

    foreach ($data as $key => $project) {
        if ($project['id'] == $idToUpdate) {
            $data[$key]['nim'] = $_POST['NIM'];
            $data[$key]['nama'] = $_POST['nama'];
            $data[$key]['kelas'] = $_POST['Kelas'];
            $data[$key]['jurusan'] = $_POST['jurusan'];
            $data[$key]['username'] = $_POST['username'];
            $data[$key]['status'] = $_POST['status'];
            break;
        }
    }

    $newJsonString = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('testminat.json', $newJsonString);

    header('Location: data.php');
}
?>
