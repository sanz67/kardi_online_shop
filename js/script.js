function kirim() {
  var judul = document.getElementById('jdl').value;
  var harga = document.getElementById('harga').value;
  var isi = document.getElementById('postingan').value;
  var isi2 = '';
  for (var r = 0; r < isi.length; r++) {
    if (isi[r] == String.fromCharCode(92) || isi[r] == String.fromCharCode(39) || isi[r] == String.fromCharCode(34)) {
      isi2 += String.fromCharCode(92) + isi[r];
    } else {
      isi2 += isi[r];
    }
  }
  window.location = "./php/update.php?pesan=" + isi2 + "&harga=" + harga + "&judul=" + judul;

  xmlhttp2.onreadystatechange = function() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
      document.getElementById('daftar_post').innerHTML = xmlhttp2.responseText;
    }
  }
}


function hapus(x) {

  var xmlhttp1 = new XMLHttpRequest();
  xmlhttp1.open("GET", "./php/hapuspostjax.php?id_post=" + x, true);
  xmlhttp1.send();

  xmlhttp1.onreadystatechange = function() {
    if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
      document.getElementById('pos1' + x).style = "display:none";
    }
  };
}
