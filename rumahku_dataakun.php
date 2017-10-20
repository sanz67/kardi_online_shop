<?php 

 ////////////////////////////////cek data akun
  $data_akun_ku = mysqli_fetch_array(mysqli_query($konek,"SELECT id_pengguna, nama, alamat, warna_favorit FROM pengguna WHERE username='$username_ku'"));;
  $nama_ku = $data_akun_ku['nama'];
  $namadepan1 = explode(" ", $nama_ku);
  $namadepan_ku = $namadepan1[0];
  $warna_ku = $data_akun_ku['warna_favorit'];
  $id_pengguna_ku= $data_akun_ku['id_pengguna'];
  $alamat_ku = $data_akun_ku['alamat'];
  
  ?>