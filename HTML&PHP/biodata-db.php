<?php
include 'koneksi-db.php';

if (!empty($_POST)) {
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $query = mysqli_query($koneksi, "insert into biodata value('$nim', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir') ");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Biodata</title>
</head>

<body>
    <h1>Tambah Biodata Mahasiswa</h1>
    <form method="post">
        <table>
            <tr>
                <td>
                    <label for="NIM">NIM</label>
                </td>
                <td>
                    <input id="NIM" type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_lengkap">Nama Lengkap</label>
                </td>
                <td>
                    <input id="nama_lengkap" type="text" name="nama_lengkap">
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <input id="jenis_kelamin_L" type="radio" name="jenis_kelamin">
                    <label for="jenis_kelamin_L">Laki-Laki</label>
                    <input id="jenis_kelamin_P" type="radio" name="jenis_kelamin">
                    <label for="jenis_kelamin_P">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                </td>
                <td>
                    <input id="tanggal_lahir" type="date" name="tanggal_lahir">
                </td>
            </tr>
            <tr>
                <td colspan="2">

                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>

    <script>
        <?php if ($query): ?>
            alert('Data berhasil ditambahkan');
        <?php endif ?>
    </script>
</body>

</html>