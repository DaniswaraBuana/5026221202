window.onscroll = function () {
    var navbar = document.querySelector(".navbar");
    var scrollHeight = window.scrollY;

    // Jika sudah discroll melebihi tinggi awal navbar (misalnya 100px)
    if (scrollHeight > 100) {
      navbar.classList.add("navbar-scrolled");
    } else {
      navbar.classList.remove("navbar-scrolled");
    }
  };
