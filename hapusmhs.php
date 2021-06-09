<?php
session_start();
?>
<!DOCTYPE html>
<?php
include('crudmhs.php');
$sql="select * from mahasiswa";
$data = bacaMhs($sql);
?>
<html>
<head>
    <title>Daftar Mahasiswa</title>
</head>
    <body>
        <?php
            echo 'user: '.$_SESSION['namauser'];
        ?>
<h2>Daftar Mahasiswa</h2>
    <table border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Jurusan</th>
        <th>Proses</th>
    </tr>
<?php
foreach($data as $mhs){
    $nim = $mhs['NIM'];
    $nama = $mhs['Nama'];
    $kelamin = $mhs['Kelamin'];
    $jurusan = $mhs['Jurusan'];
echo ".
<tr>
    <td>$nim</td>
    <td>$nama</td>
    <td>$kelamin</td>
    <td>$jurusan</td>
    <td><a href='konfirmasihapusmhs.php?nim=$nim'>Hapus</a></td>
</tr>
";
}
?>
</table>
<br>
<a href="logout.php">Logout</a>
</body>
</html>