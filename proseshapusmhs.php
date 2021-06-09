<?php
    //Untuk Menghapus Data
include ('crudmhs.php');

    // ambil kode dari query string
    $nim = $_GET['nim'];
    $hasil = hapusMhs($nim);

    // apakah query hapus data berhasil?
    if( $hasil == true ){
        // kalau berhasil akan dialihkan ke halaman bacamk.php dengan status=sukses
        header("Location: hapusmhs.php");
    } else {
        // kalau gagal akan memunculkan pesan gagal
        die("Maaf Data Gagal Untuk di Hapus...");
    }
?>