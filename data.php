<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Asprak</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <h1>Data Test Minat Bakat</h1>

    <table border="1" cellspacing="0" id="kategoriTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Username</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        $(document).ready(function() {
            function fetchAndDisplayKategori() {
                $.getJSON("testminat.json", function(data) {
                    $("#kategoriTable tbody").empty();

                    $.each(data, function(data, project) {
                        var newRow = $("<tr>");
                        newRow.append("<td>" + project.id + "</td>");
                        newRow.append("<td>" + project.nim + "</td>");
                        newRow.append("<td>" + project.nama + "</td>");
                        newRow.append("<td>" + project.kelas + "</td>");
                        newRow.append("<td>" + project.jurusan + "</td>");
                        newRow.append("<td>" + project.username + "</td>");
                        newRow.append("<td>" + project.status + "</td>");
                        newRow.append("<td><a href='ubah.php?id=" + project.id + "'>Edit </a><a href='hapus_data.php?id=" + project.id + "'> Delete</a></td>");
                        $("#kategoriTable tbody").append(newRow);
                    });
                });
            }fetchAndDisplayKategori();
        });
    </script>
</body>

</html>
