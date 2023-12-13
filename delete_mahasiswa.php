<?php

include 'config/app.php';

$id_mhs = (int) $_GET['id_mhs'];

if (delete_data($id_mhs) > 0) {
    echo "<script>
            alert('Data berhasil dihapus');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            document.location.href = 'admin.php';
        </script>";
}

?>