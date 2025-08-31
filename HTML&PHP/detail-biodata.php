<?php if (!isset($_GET['nim'])): ?>

    <h1>Mahasiswa Tidak Ditemukan</h1>

<?php
    die;
endif;

include 'koneksi-db.php';

$nim = $_GET['nim'];
$query = mysqli_query($koneksi, "Select * from biodata where nim = '$nim'");
$data = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Biodata </title>
</head>

<body>
    <h1>Biodata Mahasiswa</h1>
    <table border="1">
        <tr>
            <td>
                NIM
            </td>
            <td>
                <?= $data['nim'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Nama Lengkap
            </td>
            <td>
                <?= $data['nama_lengkap'] ?>
            </td>
        </tr>
        <tr>
            <td>
                Jenis Kelamin
            </td>
            <td>
                <?= $data['jenis_kelamin'] != '' ? ($data['jenis_kelamin'] == 'L' ? 'Laki-Laki' : 'Perempuan') : '-'; ?>
            </td>
        </tr>
        <tr>
            <td>
                Tanggal Lahir
            </td>
            <td>
                <?= $data['tanggal_lahir'] ?>
            </td>
        </tr>

    </table>

    <!-- 
    <h1>Form Edit Biodata Mahasiswa</h1>
    <form method="post">
        <table>
            <tr>
                <td>
                    <label for="NIM">NIM</label>
                </td>
                <td>
                    <input id="NIM" type="text" name="nim" value="<?= isset($_POST['nim']) ? $_POST['nim'] : '' ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nama_lengkap">Nama Lengkap</label>
                </td>
                <td>
                    <input id="nama_lengkap" type="text" name="nama_lengkap" value="<?= isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : '' ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Jenis Kelamin
                </td>
                <td>
                    <input id="jenis_kelamin_L" type="radio" name="jenis_kelamin" value="L" <?= isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>
                    <label for="jenis_kelamin_L">Laki-Laki</label>
                    <input id="jenis_kelamin_P" type="radio" name="jenis_kelamin" value="P" <?= isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>
                    <label for="jenis_kelamin_P">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                </td>
                <td>
                    <input id="tanggal_lahir" type="date" name="tanggal_lahir" value="<?= isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : '' ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form> -->
</body>

</html>