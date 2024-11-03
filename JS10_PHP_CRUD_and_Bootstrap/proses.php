<?php
include('koneksi.php');

if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama'] ?? '');
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin'] ?? '');
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat'] ?? '');
    $no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp'] ?? '');

    if ($aksi == 'tambah') {
        // Query untuk menambah data
        $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";
        if (mysqli_query($koneksi, $query)) {
            header('Location: index.php');
            exit();
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($koneksi);
        }
    } elseif ($aksi == 'ubah') {
        // Pastikan ID terdefinisi dan valid
        if (isset($_POST['id']) && is_numeric($_POST['id'])) {
            $id = mysqli_real_escape_string($koneksi, $_POST['id']);
            // Query untuk mengupdate data
            $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'";
            if (mysqli_query($koneksi, $query)) {
                header('Location: index.php');
                exit();
            } else {
                echo "Gagal mengupdate data: " . mysqli_error($koneksi);
            }
        } else {
            echo "ID tidak valid atau tidak ditemukan.";
        }
    } elseif ($aksi == 'hapus') {
        // Pastikan ID terdefinisi dan valid
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = mysqli_real_escape_string($koneksi, $_GET['id']);
            // Query untuk menghapus data
            $query = "DELETE FROM anggota WHERE id = '$id'";
            if (mysqli_query($koneksi, $query)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal menghapus data: " . mysqli_error($koneksi);
            }
        } else {
            echo "ID tidak valid atau tidak ditemukan.";
        }
    } else {
        header("Location: index.php");
    }
} else {
    echo "Aksi tidak valid.";
}

mysqli_close($koneksi);
?>
