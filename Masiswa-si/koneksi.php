<?php
  $konek = mysqli_connect("localhost", "root", "", "data_mahasiswa"); 

  //Check connection
  if (mysqli_connect_errno()){
    echo "koneksi database gagal : ". mysqli_connect_error();
  }

?>