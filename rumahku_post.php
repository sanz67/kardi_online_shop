<?php
  include("./php/konek.php");
  include("rumahku_dataakun.php");
  $tampil_post3 = "SELECT * FROM postingan ORDER BY id_postingan DESC /*LIMIT 5*/";
  $tampil_post2 = mysqli_query($konek,$tampil_post3);


   while($data_post = mysqli_fetch_array($tampil_post2)){

          $hasil1= mysqli_query($konek,"SELECT nama, warna_favorit FROM pengguna WHERE id_pengguna=$data_post[id_pengguna]");
          $data1 = mysqli_fetch_array($hasil1);

          $id_postingan = $data_post['id_postingan'];

          $jumlah_suka4 = mysqli_query($konek,"SELECT COUNT(*) AS yani FROM suka WHERE id_postingan=$id_postingan AND jenis='1'");
          $jumlah_suka3=mysqli_fetch_assoc($jumlah_suka4);
          $jumlah_suka=$jumlah_suka3['yani'];


          echo "<span id='pos1$data_post[id_postingan]'> <div class='status1 $data1[warna_favorit]' id='pos$data_post[id_postingan]'>";
          echo "<nama><b>$data_post[judul]</b></nama>";
          echo "<i><span style='font-size:25px; color='$data1[warna_favorit]'> $data_post[isi]
          <br>
          Rp. $data_post[harga]
          </span></i></h3><br />";


          if($data_post['id_pengguna']==$id_pengguna_ku)
          {
            echo "<button onclick='hapus($data_post[id_postingan])' class='suka'>HAPUS</button>";
          }
          echo "</div></span><br>";
         }

  ?>
