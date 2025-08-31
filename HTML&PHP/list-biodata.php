<?php

include 'koneksi-db.php';

$query = mysqli_query($koneksi, 'Select * from biodata');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Biodata</title>
</head>

<body>
    <h1>List Biodata</h1>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Details</th>
        </tr>
        <?php
        $i = 1;
        while ($data = mysqli_fetch_array($query)): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $data['nim']; ?></td>
                <td><?= $data['nama_lengkap']; ?></td>
                <td><?= $data['jenis_kelamin'] != '' ? ($data['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan') : '-'; ?></td>
                <td><?= $data['tanggal_lahir']; ?></td>
                <td><a href="detail-biodata.php?nim=<?= $data['nim']; ?>">Detail</a></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>