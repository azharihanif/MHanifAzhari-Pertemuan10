<?php
    include ('crudmhs.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Penghapusan Data Mahasiswa</title>
</head>
<body>
    <?php
        $koneksi = koneksiAkademik();
        $nim = $_GET['nim'];
        $data = mysqli_query($koneksi, "select * from mahasiswa where NIM ='$nim'");
        $edit = mysqli_fetch_array($data);
    ?>

    <h2><?php echo 'Apakah anda akan menghapus data mahasiswa dengan NIM : '.$nim ?></h2>
    <form action="proseshapusmhs.php" method="GET">
        <input type="text" hidden name="kode" id="kode" value="<?php echo $edit['nim']; ?>">
        <input type="submit" value="OK">
        <a href="hapusmhs.php"><input type="button" value="Batal"></a>
    </form>

</body>

</html>
</html>