<?php
    include('crudMhs.php');

    session_start();
    if (!isset($_SESSION['namauser'])){
    header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php
        $data = bacaSemuaMhs();

        if ($data == null) {
            echo "Tidak ada data mahasiswa";
        } else {
    ?>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>JenisKelamin</th>
            <th>Jurusan</th>
        </tr>

        <?php
            foreach($data as $mhs){
                $nim = $mhs['NIM'];
                $nama = $mhs['Nama'];
                $kelamin = $mhs['Kelamin'];
                $jurusan = $mhs['Jurusan'];

                echo "
                <tr>
                <td>$nim</td>
                <td>$nama</td>
                <td>$kelamin</td>
                <td>$jurusan</td>
                </tr>
                ";
            }
             echo '</table>';
        }
    ?>
</body>

</html>