<?php
// API connect database
$mysqli = new mysqli("localhost","root","","universitas_pasundan");

//ambil data database
$result = $mysqli->query("SELECT * FROM mahasiswa");
$rows = $result->fetch_all();

//convert to JSON
$data_json=json_encode($rows);

// show JSON data
echo $data_json;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest API</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="container">
    <h3 class="my-3">Daftar Mahasiswa</h3>
    <table border="1" class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nrp</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;?>
            <?php foreach(json_decode($data_json)as $data) {?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?= $data[1];?></td>
                    <td><?= $data[2];?></td>
                    <td><?= $data[3];?></td>
                </tr>
                <?php $i++;?>
            <?php }?>
        </tbody>
    </table>
</body>
</html>