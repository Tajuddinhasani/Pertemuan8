<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>data mahasiswa</h2>
    <table border="1">
    <tr>
        <td>no</td>
        <td>nama mahasiswa</td>
        <td>alamat</td>  
        <td>agama</td>
        <td>asal sekolah</td>
        <td>aksi</td>
    </tr>
    <?php
        $no = 1;
        $query = mysqli_query($konek, "SELECT * FROM mahasiswa");
        while ($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no ++; ?></td>
                <td><?php echo $data ['nama_mahasiswa']; ?></td>
                <td><?php echo $data ['alamat_mahasiswa']; ?></td>
                <td><?php echo $data ['agama_mahasiswa']; ?></td>
                <td><?php echo $data ['asal_sekolah']; ?></td>
                <td>
                    <a href="">edit</a>
                    <a href="">hapus</a>
                </td>
            </tr>

            <?php
            }
            ?>
     </table>
</body>
</html>