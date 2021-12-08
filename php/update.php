<?php

include 'conn.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM mhsiswa where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$nama = $row['nama'];
$sekolah = $row['sekolah'];
$jurusan = $row['jurusan'];
$agama = $row['agama'];
$alamat = $row['alamat'];
$jk = $row['jk'];

if (isset($_POST['update'])) { //memasukan dan mengedit data 
    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $jurusan = $_POST['jurusan'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];

    $sql = "UPDATE mhsiswa set id=$id,nama='$nama',sekolah='$sekolah',jurusan='$jurusan',agama='$agama',alamat='$alamat',jk='$jk' where id=$id";
    $result = mysqli_query($conn, $sql);

    //mengecek success atau error
    if ($result) {
        //echo "update successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>oprasion</title>
</head>

<body>

    <div class="container my-5 ">
        <form method="POST">
            <div class="form-group">
                <label>nama</label>
                <input type="text" class="form-control" placeholder="masukan nama anda..." name="nama" autocomplete="off" value=<?php echo $nama; ?>>
            </div>
            <div class="form-group">
                <label>sekolah</label>
                <input type="text" class="form-control" placeholder="masukan sekolah anda..." name="sekolah" autocomplete="off" value=<?php echo $sekolah; ?>>
            </div>
            <div class="form-group">
                <label>jurusan</label>
                <select class="form-control" name="jurusan">
                    <option value="">pilihlah jurusan anda. . .</option>
                    <option value=""></option>
                    <option value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>
                    <option value=<?php echo $jurusan; ?>>Teknik jaringan dan komputer</option>
                    <option value=<?php echo $jurusan; ?>>Teknik produksi dan penyiaran ptogram radio</option>
                    <option value=<?php echo $jurusan; ?>>Multimedia</option>
                    <option value=<?php echo $jurusan; ?>>administrasi perkantoran</option>
                    <option value=<?php echo $jurusan; ?>>akuntansi</option>
                    <option value=<?php echo $jurusan; ?>>pemasaran</option>

                </select>
            </div>
            <div class="form-group">
                <label>agama</label>
                <select class="form-control" name="agama">
                    <option value="">pilihlah agama anda. . .</option>
                    <option value=""></option>
                    <option value=<?php echo $agama; ?>>islam</option>
                    <option value=<?php echo $agama; ?>>kristen</option>
                    <option value=<?php echo $agama; ?>>budha</option>
                    <option value=<?php echo $agama; ?>>hindu</option>

                </select>
            </div>
            <div class="form-group">
                <label>alamat</label>
                <textarea class="form-control" placeholder="masukan alamat anda..." name="alamat" autocomplete="off" value=<?php echo $alamat; ?>></textarea>
            </div>
            <div class="mb-3">
                <label>jenis kelamin</label>
                <br>
                <input type="radio" name="jk" autocomplete="off" value="laki laki"> laki laki
                <input type="radio" name="jk" autocomplete="off" value="perempuan"> perempuan

            </div>


            <div class="mx-auto">
                <button type="reset" class="btn btn-danger" name="hapus"><a href="index.php" class="text-light"> close </a>
                    <button type="submit" class="btn btn-primary" name="update"> update</button>
                </button>
            </div>
        </form>
    </div>



</body>

</html>