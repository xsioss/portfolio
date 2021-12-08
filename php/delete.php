<?php
include 'conn.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from mhsiswa where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
        alert('apa anda yakin menghapus data ini ?');
        document.location='display.php';
        </script>";
    }
}
