<?php
include 'conn.php';
if (isset($_POST['simpan'])) { //memasukan dan menyimpan data 
    $nama = $_POST['nama'];
    $sekolah = $_POST['sekolah'];
    $jurusan = $_POST['jurusan'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];

    $sql = "INSERT INTO mhsiswa (nama,sekolah,jurusan,agama,alamat,jk)
    values ('$nama','$sekolah','$jurusan','$agama','$alamat','$jk')";
    $result = mysqli_query($conn, $sql);

    //mengecek success atau error
    if ($result) {
        //echo "data inserted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <!-- ! my fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="../style.css">
    <title>portfolio</title>

</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Moch Hengky dwi septyan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Portfolio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->

    <!-- menampilkan table -->
    <div class="jumbotron bg-transparent">
        <div class="container">
            <h2 class="text-center text-white my-5"></h2>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" name="tambah">
                    isi data
                </button>
            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama</th>
                        <th scope="col">sekolah</th>
                        <th scope="col">jurusan</th>
                        <th scope="col">agama</th>
                        <th scope="col">alamat</th>
                        <th scope="col">jenis kelamin</th>
                        <th scope="col">aksi </th>

                    </tr>
                </thead>
                <tbody>

                    <!-- menampilkan data siswa-->
                    <?php
                    $sql = "SELECT * FROM mhsiswa";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $nama = $row['nama'];
                            $sekolah = $row['sekolah'];
                            $jurusan = $row['jurusan'];
                            $agama = $row['agama'];
                            $alamat = $row['alamat'];
                            $jk = $row['jk'];
                            echo '<tr>
                        <th scope="row">' . $id . '</th>
                        <td>' . $nama . '</td>
                        <td>' . $sekolah . '</td>
                        <td>' . $jurusan . '</td>
                        <td>' . $agama . '</td>
                        <td>' . $alamat . '</td>
                        <td>' . $jk . '</td>
                        <td><button class= "btn btn-primary" ><a href="update.php?updateid=' . $id . '" class="text-light">edit</a></button></td>
                        <td><button class= "btn btn-danger" ><a onclick="return confirm()" href="delete.php?deleteid=' . $row['id'] . '" class="text-light"">hapus</a></button></td>
                        </tr>';
                        }
                    }
                    ?>
                    <!-- akhir menampilkan data siswa-->
                </tbody>
            </table>
        </div>
    </div>
    <!-- akhir table -->




    <!-- buat isi data -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header /bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">ISI DATA SISWA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label>nama</label>
                            <input type="text" class="form-control" placeholder="masukan nama anda..." name="nama" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>sekolah</label>
                            <input type="text" class="form-control" placeholder="masukan sekolah anda..." name="sekolah" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>jurusan</label>
                            <select class="form-control" name="jurusan">
                                <option value="">pilihlah jurusan anda. . .</option>
                                <option value=""></option>
                                <option value="Rekayasa perangkat lunak">Rekayasa perangkat lunak</option>
                                <option value="Teknik jaringan dan komputer">Teknik jaringan dan komputer</option>
                                <option value="Teknik produksi dan penyiaran ptogram radio">Teknik produksi dan penyiaran ptogram radio</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="administrasi perkantoran">administrasi perkantoran</option>
                                <option value="akuntansi">akuntansi</option>
                                <option value="pemasaran">pemasaran</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>agama</label>
                            <select class="form-control" name="agama">
                                <option value="">pilihlah agama anda. . .</option>
                                <option value=""></option>
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                                <option value="budha">budha</option>
                                <option value="hindu">hindu</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>alamat</label>
                            <textarea class="form-control" placeholder="masukan alamat anda..." name="alamat" autocomplete="off"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>jenis kelamin</label>
                            <br>
                            <input type="radio" name="jk" autocomplete="off" value="laki laki"> laki laki
                            <input type="radio" name="jk" autocomplete="off" value="perempuan"> perempuan

                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="simpan">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- akhir buat isi data -->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>