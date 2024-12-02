<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/imgSlide.js') }}"></script>
    <script src="{{ asset('js/scrollNavbar.js') }}"></script>
    <script src="{{ asset('js/validateForm.js') }}"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Akbar Daniswara Cahyabuana</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md fixed-top py-4">
        <div class="container-fluid d-flex">
          <a class="navbar-brand mx-auto mx-md-0" href="#"
          >
            <img src="img/HMNS_Logo.avif" alt="" class="w-50"/>
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span>
              <img src="img/hamburger-menu.png" alt="" class="hamburger w-50">
            </span>
          </button>
          <div class="collapse navbar-collapse p-5 p-md-0" id="navbarSupportedContent">
            <ul class="nav-items navbar-nav mb-2 mb-lg-0 ms-auto pt-5 pt-md-0">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="#catalog"
                  >CATALOG</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">PROMO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="start">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md d-md-block d-none d-flex slide-up">
              <img src="img/product1.webp" alt="" />
            </div>

            <div class="col-md d-flex flex-column justify-content-md-center">
              <div
                class="stbr md-stbr d-flex flex-column ms-auto mx-md-auto"
              >
                <h2 class="text-white ms-auto stbrh md-stbrh">Start to be remembered</h2>
                <div class="ms-auto">
                  <button class="shopHMNSbtn me-3 mb-3">SHOP HMNS</button>
                  <button>SHOP HOME OF HUMANS</button>
                </div>
              </div>
            </div>
          </div>
          <div class="d-md-none d-block d-flex">
            <img src="img/product1.webp" alt="" class="mx-auto p1" />
          </div>
        </div>
      </section>

      <section class="s2">
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-md d-flex flex-column justify-content-center align-items-center"
            >
              <div class="col-md d-block d-md-none justify-content-center">
                <img src="img/product2.webp" class="slide-up h-75 p2" />
              </div>

              <div class="s2p s2p-md d-flex flex-column">
                <h2 class="text-white fs-3">
                  All About Scent, Fragrance Insights
                </h2>
                <p class="text-white">
                  Unveil the artistry of perfumery through insightful articles, expert advice, and trend updates. From classic to contemporary, find inspiration and elevate your fragrance experience.
                </p>
                <button>READ OUR ARTICLE</button>
              </div>
            </div>
              <div class="col-md d-none d-md-block justify-content-center">
                <img src="img/product2.webp" class="slide-up h-75" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="s3 w-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-5 s3row d-flex flex-column justify-content-top">
              <div class="s3p d-flex flex-column mx-auto ms-md-auto align-items-center align-items-md-start">
                <p class="p3desc text-white fs-2">
                  Fragrance is an art fused with science. In HMNS, we believe that
                  each product is there to make you adored, loved and remembered.
                </p>
                <button>SEE OUR STORIES</button>
              </div>
            </div>
            <div class="col-md-5 d-flex">
              <img src="img/product3.webp" class="p3 mx-auto" />
            </div>
          </div>
        </div>
      </section>



      <section class="catalog" id="catalog">
        <div class="container-fluid">
          <div id="carouselCatalog" class="carousel slide carouselCatalog pb-5 pt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container px-5">
                  <div class="row">
                    <div class="col-4 px-lg-5 px-3">
                      <div class="card">
                        <a href="#unpatched">
                          <img src="img/catalog/unpatched.webp" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-none d-lg-block">
                          <h5 class="text-center">UNPATCHED</h5>
                          <p class="card-text text-center">
                            Produk pertama HMNS yang merupakan hasil gabungan bioteknologi canggih & bahan alami berkelanjutan yang berasal dari fraksi minyak patchouli.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 px-lg-5 px-3">
                      <div class="card">
                        <a href="#ambar">

                          <img src="img/catalog/ambar.webp" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-none d-lg-block">
                          <h5 class="text-center">AMBAR JANMA</h5>
                          <p class="card-text text-center">
                            Nikmati wangi Ambar Janma “Manusia Harum”. Parfum pertama & terbaru HMNS dengan teknologi yang telah dipatenkan bernama The Impossible Scent™
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 px-lg-5 px-3">
                      <div class="card">
                        <a href="#perfection">

                          <img src="img/catalog/perfection.webp" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-none d-lg-block">
                          <h5 class="text-center">THE PERFECTION</h5>
                          <p class="card-text text-center">
                            Sebuah kolaborasi spesial HMNS dengan Christian Sugiono. Parfum bertipe spicy fougère & luxurious clean. Kesegarannya membangkitkan rasa.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item active">
                <div class="container px-5">
                  <div class="row">
                    <div class="col-4 px-lg-5 px-3">
                      <div class="card">
                        <a href="#eos">
                          <img src="img/catalog/eos.webp" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-none d-lg-block">
                          <h5 class="text-center">ESSENCE OF THE SUN</h5>
                          <p class="card-text text-center">
                            Kali ini HMNS ingin mengenalkan kamu dengan solar accord. Sebuah wangi yang meradiasi sensasi kehangatan matahari.

                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 px-lg-5 px-3">
                      <div class="card">
                        <a href="#orgsm">

                          <img src="img/catalog/orgsm.webp" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-none d-lg-block">
                          <h5 class="text-center">DARKER SHADE OF ORGSM</h5>
                          <p class="card-text text-center">
                            This fragrance is a captivating invitation into an unseen world. The spicy introduction gradually unfolds, alluding to the depths that are yet to be discovered.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 px-lg-5 px-3">
                      <div class="card">
                        <a href="#untitled">

                          <img src="img/catalog/untitled.webp" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body d-none d-lg-block">
                          <h5 class="text-center">UNTITLED HUMANS</h5>
                          <p class="card-text text-center">
                            Dalam kolaborasi eksklusif antara HMNS dan Maliq & D'Essentials, kami mengajak kamu untuk merayakan keunikanmu tanpa label.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselCatalog" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselCatalog" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <div class="row product-catalog pt-5 pb-5">
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column pb-5 pt-5" id="eos">
              <img src="img/catalog/eos.webp" class="w-75" alt="Essence of The Sun">
              <h4 class="text-center pt-3">Essence Of The Sun</h4>
              <p class="w-75 text-center pt-3 pb-3">
                <b>Top Notes</b> Bergamot, Coriander Seeds, Pink Pepper
                <br>
                <b>Middle Notes</b> Tropical Flower, Indian Jasmine, Sambac (Natural), Turkish Rose (Natural), Tiare Flower, Solar Accord <br>
                <b>Base Notes</b> Vanillan, Absolute Tonka Bean, Ambrette, Cedar Wood
              </p>
              <a href="https://madeforhmns.com/products/essence-of-the-sun-eos-100ml-edp" target="_blank">
                <button class="px-5">LEARN MORE</button>
              </a>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column pb-5 pt-5" id="orgsm">
              <img src="img/catalog/orgsm.webp" class="w-75" alt="ORGSM" >
              <h4 class="text-center pt-3">Darker Shade of ORGSM</h4>
              <p class="w-75 text-center pt-3 pb-3">
                <b>Top Notes</b> Orange Blossom, Apple, Pepper,
                <br>
                <b>Middle Notes</b> Cypriol, Caramel, Patchouli <br>
                <b>Base Notes</b> Vanilla Beans, Cedarwood, Amber, Vetiver
              </p>
              <a href="https://madeforhmns.com/products/hmns-perfume-darker-shades-of-orgasm-eau-de-parfum" target="_blank">
                <button class="px-5">LEARN MORE</button>
              </a>
            </div>
          </div>
          <div class="row product-catalog pt-5 pb-5">
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column pb-5 pt-5" id="untitled">
              <img src="img/catalog/untitled.webp" class="w-75" alt="Untitle Human">
              <h4 class="text-center pt-3">Untitled Humans</h4>
              <p class="w-75 text-center pt-3 pb-3">
                <b>Top Notes</b> Coriander, Violet Leaves, Ambrette
                <br>
                <b>Middle Notes</b> Figolide, Velvet Note, Rose Absolute <br>
                <b>Base Notes</b> Sandalwood, Cypriol, Vanilla Jungle Essence
              </p>
              <a href="https://madeforhmns.com/products/untitled-humans" target="_blank">
                <button class="px-5">LEARN MORE</button>
              </a>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column pb-5 pt-5" id="unpatched">
              <img src="img/catalog/unpatched.webp" class="w-75" alt="unpatched">
              <h4 class="text-center pt-3">Unpatched</h4>
              <p class="w-75 text-center pt-3 pb-3">
                <b>Top Notes</b> Jasmine Sambac, Vanilla Madagascar, Cokelat
                <br>
                <b>Middle Notes</b> Karamel,Akigalawood, Mawar <br>
                <b>Base Notes</b> Tonka Bean Brazil, Amber, Musk
              </p>
              <a href="https://madeforhmns.com/products/hmns-perfume-unpatched" target="_blank">
                <button class="px-5">LEARN MORE</button>
              </a>
            </div>
          </div>
          <div class="row product-catalog pt-5 pb-5">
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column pb-5 pt-5" id="ambar">
              <img src="img/catalog/ambar.webp" class="w-75" alt="Ambar Janma">
              <h4 class="text-center pt-3">Ambar Janma</h4>
              <p class="w-75 text-center pt-3 pb-3">
                <b>Top Notes</b> Bergamot, Elemi, Clove, Nutmed
                <br>
                <b>Middle Notes</b> Lavender, Tagetes, Lily of The Valley, Green Pear
                <br>
                <b>Base Notes</b> Driftwood, Sandalwood, Leather, White Musk
              </p>
              <a href="https://madeforhmns.com/products/hmns-perfume-ambar-janma-manusia-harum" target="_blank">
                <button class="px-5">LEARN MORE</button>
              </a>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column pb-5 pt-5" id="perfection">
              <img src="img/catalog/perfection.webp" class="w-75" alt="The Perfection">
              <h4 class="text-center pt-3">The Perfection</h4>
              <p class="w-75 text-center pt-3 pb-3">
                <b>Top Notes</b> Bergamot, Elemi, Clove, Nutmed
                <br>
                <b>Middle Notes</b> Lavender, Tagetes, Lily of The Valley, Green Pear
                <br>
                <b>Base Notes</b> Driftwood, Sandalwood, Leather, White Musk
              </p>
              <a href="https://madeforhmns.com/products/hmns-perfume-the-perfection" target="_blank">
                <button class="px-5">LEARN MORE</button>
              </a>
            </div>
          </div>


        </div>
      </section>

      <section id="contact" class="contact text-white pt-5">
        <h1 class="text-center fw-bold pb-5">Contact Us</h1>
        <div class="container px-5">
            <div class="row">
                <div class="col-md-6 kontak-teks pb-5">
                  <h5>About Us</h5>
                  <p class="pb-3">
                    HMNS (pronounced as “humans”) is a perfumery brand founded in 2019 on the day we found a perfumer who has been making perfume for two decades.

                    We had one big question that time
                    “Can we make a perfume that is affordable but also bringing the grandiose quality designer & niche perfume is all about?”

                    Then we found the answer. We have to start it online. To cut all the unimportant cost.
                    in June 2019, HMNS was born.

                    Since then, HMNS constantly making a perfume wholeheartedly with a tagline “made for humans”
                    we understand your taste and bringing you a highly curated fragrance that you will sure love.

                    We put all our energy and passion into this brand,
                    because we believe one thing

                    HMNS is here because of you.

                    Because you trusted us to grow and to learn to make mistakes

                    Join our journey in the making of the most lovable perfume brand,
                    start wear HMNS now.
                  </p>
                </div>
                <div class="col-md-6">
                    <form onsubmit="return validateForm()">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name *</label>
                          <input type="text" class="form-control" id="inputNama">
                          <span id="namaError" class="pesan-error"></span>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email *</label>
                          <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text text-white">We will not share your email with anyone.</div>
                          <span id="emailError" class="pesan-error"></span>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Subject *</label>
                          <input type="text" class="form-control" id="inputSubjek">
                          <span id="subjekError" class="pesan-error"></span>
                        </div>
                        <div class="mb-3 form-check inputPesan">
                        <label class="labelPesan" for="inputPesan">Message *</label><br>
                          <textarea name="pesan" id="inputPesan" cols="50" rows="8"></textarea>
                          <span id="pesanError" class="pesan-error"></span>
                        </div>
                        <button type="submit" class="btn submit">Submit</button>

                    </form>
                </div>
            </div>
        </div>

    </section>


      <footer >
        <div class="container">
          <div class="row">
            <div class="col-md d-flex">
              <div class="fp mx-auto ms-md-auto">
                <h5 class="text-white pb-3">Enjoy HMNS exclusive offers</h5>
                <p class="text-white w-75 pb-1">
                  Stay up-to-date with our latest news, updates and promotions
                </p>
                <div class="d-flex pb-4">
                  <input type="text" class="w-75" />
                  <button>Subscribe</button>
                </div>
                <img src="img/logo-white_1.avif" alt="" />
              </div>
            </div>
            <div class="col-md-7">
              <div class="row fl">
                <div class="col-md-6">
                  <span class="text-white">Marketplace</span>
                  <ul class="list-unstyled">
                    <li><a href="https://shopee.co.id/hmnsperfume" target="\_blank" >Shopee</a></li>
                    <li><a href="https://www.tokopedia.com/hmnsperfume" target="_blank" >Tokopedia</a></li>
                    <li><a href="https://www.lazada.co.id/shop/hmns-perfume/" target="_blank">Lazada</a></li>
                    <li><a href="https://www.tiktok.com/@hmns.id" target="_blank" >TikTok Shop</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <span class="text-white">Connect with us</span>
                  <ul class="list-unstyled">
                    <li><a href="https://www.instagram.com/daniswarabuana/" target="_blank">Instagram</a></li>
                    <li><a href="https://twitter.com/hmnsid?s=21&t=w7PHlDB8JhRlmpM_IUDSWg" target="_blank">Twitter</a></li>
                    <li><a href="https://www.tiktok.com/@hmns.id?_t=8bz3c2GbXzW&_r=1" target="_blank">TikTok</a></li>
                    <li><a href="https://youtube.com/@hmnsperfume3557" target="_blank">YouTube</a></li>
                    <li><a href="https://www.linkedin.com/company/hmnsperfume/" target="_blank">Linkedin</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="container mt-auto copyright pb-5">
          <div class="row">
            <div class="col">
              <span class="copyrightText">
                Akbar Daniswara Cahyabuana - 5026221202
              </span>
            </div>
            <div class="col d-flex">
              <span class="ms-auto me-4 termsOfUse"><a href="https://madeforhmns.com/" target="_blank">Terms of Use</a> | <a href="https://madeforhmns.com/" target="_blank">Privacy Policy</a></span>
            </div>
          </div>
        </div>

      </footer>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- Task Start -->
    @php
        // Array of Task
        $services = [
            [
                'title' => 'helloHTML',
                'link' => '/hello'
            ],
            [
                'title' => 'Style',
                'link' => '/style'
            ],
            [
                'title' => 'Responsive',
                'link' => '/responsive'
            ],
            [
                'title' => 'Form',
                'link' => '/form'
            ],
            [
                'title' => 'Linktree',
                'link' => '/linktree'
            ],
            [
                'title' => 'ourClient',
                'link' => '/ourClient'
            ],
        ];
    @endphp

        <div class="container-fluid bg-light my-5 py-6" id="service">
            <div class="container">
                <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <h1 class="display-5 mb-0">My Assignment</h1>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ($services as $service)
                        <div class="col-lg-6">
                            <a href="{{ $service['link'] }}" class="service-item-link">
                                <div class="service-item d-flex align-items-center justify-content-between bg-white rounded h-100 p-4 position-relative">
                                    <h4 class="mb-0">{{ $service['title'] }}</h4>
                                    <span class="icon-arrow">&gt;</span> <!-- Ikon panah di sebelah kanan -->
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    <!-- Task End -->

</body>
</html>

