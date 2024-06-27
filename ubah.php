<?php
if (isset($_GET['id'])) {
    $idToEdit = $_GET['id'];

    $jsonString = file_get_contents('testminat.json');

    $data = json_decode($jsonString, true);

    foreach ($data as $key => $project) {
        if ($project['id'] == $idToEdit) {
            $projectToEdit = $project;
            break;
        }
    }
}

if (isset($projectToEdit)) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit</title>
    </head>

    <body>
        <h1>Edit Data</h1>
        <form action="update_data.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $projectToEdit['id']; ?>">
            <label for="nim">NIM:</label>
            <input type="text" id="NIM" name="NIM" value="<?php echo $projectToEdit['nim']; ?>"><br>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?php echo $projectToEdit['nama']; ?>">
            <br>

            <label for="kelas">Kelas:</label>
            <input type="text" id="Kelas" name="Kelas" value="<?php echo $projectToEdit['kelas']; ?>"><br>

            <label for="jurusan">Jurusan:</label>
            <input type="text" id="jurusan" name="jurusan" value="<?php echo $projectToEdit['jurusan']; ?>"><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $projectToEdit['username']; ?>"><br>

            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="<?php echo $projectToEdit['status']; ?>"><br>
            </select><br>
            <button type="submit">Update</button>
        </form>
    </body>

    </html>
<?php
} else {
    echo "Category not found.";
}
?>