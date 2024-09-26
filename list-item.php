<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <<br>
        <h4>DAFTAR NAMA BARANG</h4>

        <?php
        include 'koneksi.php';

        if(isset($_GET['id_barang'])) {
            $id_barang = htmlspecialchars($_GET["id_barang"]);

            $sql = "delete from barang where id_barang = '$id_barang' ";
            $hasil = mysqli_query($kon,$sql);

            // berhasil atau tidak
            if ($hasil) {
                header('location: list-item.php');
            }else {
                echo "<div class='alert alert-danger'>Data gagal dihapus</div>";
            }
        }
    ?>

        <tr class="table-danger">
            <thead>
                <tr>
                    <table class="my-3 table table-bordered">
                        <tr class="table-primary">
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th colspan='2'>Aksi</th>
                        </tr>
                        </thead>

        <?php
        include 'koneksi.php';
        $sql = "select from barang order by id_barang desc";

        $hasil = mysqli_query($kon,$sql);
        $no=0;
        while($data = mysqli_fetch_array($hasil)) {
            $no++;
            ?>

            <tbody>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["nama_barang"]; ?></td>
                    <td><?php echo $data["jumlah"]; ?></td>
                    <td><?php echo $data["harga"]; ?></td>
                    <td>
                        <!-- <a href="update.php?id_barang=<?php echo htmlspecialchars($data['id_barang'])"></a> -->
                    </td>
                </tr>
            </tbody>
        }
                    </table>
                </tr>
           
        </tr>
    </div>
</body>
</html>