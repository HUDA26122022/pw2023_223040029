// ambil elemen2 yang di butuh kan 
var keyword = document.getElementById('keyword');

var tombolCari = document.getElementById('tombol_cari');

var container = document.getElementById('container');

//tambahkan keyword ketika di tulis
keyword.addEventListener('keyup', function(){


    //mebuat  object ajax
    var xhr = new XMLHttpRequest();

    //cek kesiapan ajax
    xhr.onreadystatechange = function() {
        if( xhr.readyState == 4 && xhr.status == 200 ){
            container.innerHTML = xhr.responseText;
        }
    }


//eksekusi ajax
xhr.open("GET", "ajax/produk2.php?keyword=" + keyword.value, true);
xhr.send();

});