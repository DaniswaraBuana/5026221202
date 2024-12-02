document.addEventListener("DOMContentLoaded", function () {
    var images = document.querySelectorAll(".slide-up");

    // Tambahkan kelas 'visible' ketika halaman selesai dimuat
    images.forEach(function (section) {
      section.classList.add("visible");
    });
  });
