<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Ekstensi gambar yang diizinkan
    $maxFileSize = 2097152; // Batas ukuran file 2 MB

    // Loop untuk setiap file yang diunggah
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        // Cek ekstensi file
        if (!in_array($file_ext, $allowedExtensions)) {
            $errors[] = "Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, atau GIF: $file_name.";
            continue;
        }

        // Cek ukuran file
        if ($file_size > $maxFileSize) {
            $errors[] = "Ukuran file $file_name tidak boleh lebih dari 2 MB.";
            continue;
        }

        // Jika tidak ada error, pindahkan file ke folder 'documents/'
        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        }
    }

    // Tampilkan semua error jika ada
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>