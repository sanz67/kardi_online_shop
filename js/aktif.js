function aktif(){
var xmlhttp1 = new XMLHttpRequest();
xmlhttp1.onreadystatechange = function() {
    if (xmlhttp1.readyState == 4 && xmlhttp1.status == 200) {
        stokygada = xmlhttp1.responseText;
    }
};
xmlhttp1.open("GET", "./php/aktif.php", true);
xmlhttp1.send();

var xmlhttp2 = new XMLHttpRequest();
xmlhttp2.onreadystatechange = function() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById('saadahenung').innerHTML = xmlhttp2.responseText;
		if(xmlhttp2.responseText!=""){
		document.getElementById('judulhalaman').innerHTML = xmlhttp2.responseText + " Pesan baru | TentangQta";
		}
	}
};
xmlhttp2.open("GET", "./cekpesan.php", true);
xmlhttp2.send();

var xmlhttp3 = new XMLHttpRequest();
xmlhttp3.onreadystatechange = function() {
    if (xmlhttp3.readyState == 4 && xmlhttp3.status == 200) {
		if(xmlhttp3.responseText!=""){
		document.getElementById('darisiapasaja').innerHTML = xmlhttp3.responseText;
		}
	}
};
xmlhttp3.open("GET", "./cekpesandarisiapa.php", true);
xmlhttp3.send();
}

setInterval(aktif, 1000);
