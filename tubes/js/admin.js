var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Mengambil elemen gambar dengan ID "myImage"
var image = document.getElementById("myImage");

// Menambahkan event listener untuk meng-handle event klik pada gambar
image.addEventListener("click", function() {
  // Menambahkan class CSS untuk animasi
  image.classList.add("animated");

  // Menghapus class CSS setelah selesai animasi
  setTimeout(function() {
    image.classList.remove("animated");
  }, 1000); // Waktu animasi dalam milidetik
});