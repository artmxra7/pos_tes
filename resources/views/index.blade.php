@extends('layouts.base')

@section('title', 'Home')

@section('content')

<!-- Topbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a href="#" class="nav-link">Hubungi Kami</a>
      </li>
      <li class="nav-item active">
        <a href="#" class="nav-link"><i class="fa fa-phone"></i> 1500970</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="#" class="nav-link">Blog</a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">Bantuan</a>
          </li>
        </ul>
    </form>
  </div>
</nav>
<!--  -->

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg navbar-dark bg-dark bg-transparent text-light" style="top: 64px;">
    <a class="navbar-brand" href="{{ route('index') }}">
        <img id="logo" src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/navbar/desktop/inactive.svg" alt="inactive.svg">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-light">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Point of Sale
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Rangkuman Fitur</a>
                  <a class="dropdown-item" href="#">Manajemen Meja</a>
                  <a class="dropdown-item" href="#">Manajemen Inventori</a>
                  <a class="dropdown-item" href="#">Manajemen Staff</a>
                  <a class="dropdown-item" href="#">Manajemen Pelanggan</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pos') }}">Payment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pos') }}">Capital</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Lainnya
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                </div>
            </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <button class="btn" style="font-weight: 700;color: #00b8ec; background: transparent;">Login</button>
          </li>
          <li class="nav-item">
            <button class="btn btn-rounded" style="color: #2bb8ec;border: 2px solid #2bb8ec; background: transparent;">Coba Gratis</button>
          </li>
        </ul>
    </div>
</nav>
<!--  -->

<!-- Carousel -->
<div style="background-image: 'https://www.w3schools.com/bootstrap/la.jpg';">
    <div class="banner">
        <div>
            <div class="container">
                <div class="col-lg-6">
                    <h2 class="banner-title">Atur kasir lebih mudah dengan Moka POS</h2>
                    <p class="banner-body">Kami membantu bisnis Anda mempercepat proses penjualan dengan aplikasi kasir Moka</p>
                    <br>
                    <button class="btn btn-info btn-rounded btn-lg">Coba Gratis Sekarang</button><br><br><br>
                    <button type="button" class="btn btn-default video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal" style="background-color:transparent">
                        <img class="d-block w-100" src="{{ url('img/video-banner.png') }}" alt="photo">
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->

<br>
<!-- Container -->
<div class="container">

    <div class="col-lg-12">
        <div class="row">

            <div class="col-lg-12">
                <div class="row p-5">
                    <div class="col-lg-6">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/index-1@2x.png" alt="computer" width="400">
                    </div>
                    <div class="col-lg-6">
                        <p class="contras">Moka Point of Sale</p>
                        <h1 class="text-header-moka">Catatan pembayaran Anda berantakan?</h1>
                        <h4>Aplikasi kasir Moka menyederhanakan proses penjualan usaha Anda dan mengelola transaksi lebih efisien.</h4><br>
                        <button type="button" class="btn btn-lg btn-outline-info btn-rounded">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <hr class="col-lg-12">
            <div class="col-lg-12">
                <div class="row p-5">
                    <div class="col-lg-6">
                        <p class="contras">Moka Payments</p>
                        <h1 class="text-header-moka">Susah melacak pembayaran masuk dan keluar?</h1>
                        <h4>Aplikasi kasir Moka menyederhanakan proses penjualan usaha Anda dan mengelola transaksi lebih efisien.</h4>
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/partners-1.png" alt="partners" width="400">
                        <br><br>
                        <button type="button" class="btn btn-lg btn-outline-info btn-rounded">Pelajari Lebih Lanjut</button>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/index-2@2x.png" alt="computer" width="400">
                    </div>
                </div>
            </div>
            <hr class="col-lg-12">
            <div class="col-lg-12">
                <div class="row p-5">
                    <div class="col-lg-6">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/index-3@2x.png" alt="computer" width="400">
                    </div>
                    <div class="col-lg-6">
                        <p class="contras">Moka Capital</p>
                        <h1 class="text-header-moka">Mau mengembangkan bisnis Anda lebih cepat?</h1>
                        <h4>Pinjam modal usaha dari berbagai platform pendanaan untuk melebarkan sayap bisnis Anda.</h4>
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/partners.png" alt="partners" width="400">
                        <br><br>
                        <button type="button" class="btn btn-lg btn-outline-info btn-rounded">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>

            <!-- Tipe Bisnis -->
            <div class="col-lg-12 p-5 text-header-moka">
                <h2 class="text-center p-4">Cocok untuk berbagai macam tipe bisnis</h2>
                <div class="row text-center text-info">
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/coffee-shop.svg" alt="Kedai Kopi" width="100">
                                <h5 class="p-4">Kedai Kopi</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/full-service-restaurant.svg" alt="Restoran" width="100">
                                <h5 class="p-4">Restoran</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/quick-service-restaurant.svg" alt="Restoran Cepat Saji" width="100">
                                <h5 class="p-4">Restoran Cepat Saji</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/bakery.svg" alt="Toko Roti" width="100">
                                <h5 class="p-4">Toko Roti</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/retail.svg" alt="Retail" width="100">
                                <h5 class="p-4">Retail</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/minimarket.svg" alt="Minimarket" width="100">
                                <h5 class="p-4">Minimarket</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/barbershop.svg" alt="Barbershop & Salon" width="100">
                                <h5 class="p-4">Barbershop & Salon</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/layanan-kecantikan.svg" alt="Layanan Kecantikan" width="100">
                                <h5 class="p-4">Layanan Kecantikan</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col col-lg-4">
                        <a href="#" class="padding-bisnis">
                            <div class="p-4 border bg-light">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/bakery-copy.svg" alt="Layanan Profesional" width="100">
                                <h5 class="p-4">Layanan Profesional</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div> <!-- END Tipe Bisnis -->

            <!-- Testimoni -->
            <div class="col-lg-12 p-5">
                <h2 class="text-center p-4 text-header-moka">Dipercaya lebih dari 30,000 pebisnis di seluruh Indonesia</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner text-dark">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/cyclo.png" alt="logo" width="100" class="p-3">
                                    <p class="font-weight-bold contras">"Dengan Moka, saya dapat menjalankan bisnis pakaian dan kedai kopi dalam satu sistem. Moka mempercepat pengambilan keputusan berdasarkan laporan penjualan yang tersedia."</p>
                                    <p class="contras">Ardi, Pemilik Cyclo Coffee and Apparel</p>
                                    <p class="font-weight-bold">Kedai Kopi</p>
                                </div>
                                <div class="col-lg-6">
                                    <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                                        <img class="d-block w-100" src="{{ url('img/slide1.png') }}" alt="photo" width="400">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/eatlah.png" alt="logo" width="100" class="p-3">
                                    <p class="font-weight-bold contras">"Moka sangat mudah dioperasikan, entah itu untuk pegawai baru atau untuk outlet baru. Saya bisa memantau 12 toko sekaligus tanpa harus berada di sana."</p>
                                    <p class="contras">Michael, Pemilik Eatlah</p>
                                    <p class="font-weight-bold">Restoran Cepat Saji</p>
                                </div>
                                <div class="col-lg-6">
                                    <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#myModal">
                                        <img class="d-block w-100" src="{{ url('img/slide2.png') }}" alt="photo" width="400">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/bright-printing.png" alt="logo" width="100" class="p-3">
                                    <p class="font-weight-bold contras">"Saya tidak menyangka mengajukan pinjaman melalui Moka Capital bisa secepat dan semudah ini"</p>
                                    <p class="contras">Reonal Gultom, Pemilik Bright Printing</p>
                                    <p class="font-weight-bold">Layanan Profesional</p>
                                </div>
                                <div class="col-lg-6">
                                    <img class="d-block w-100" src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/Bright.jpg" alt="photo" width="400">
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/Ezo-logo.png" alt="logo" width="100" class="p-3">
                                    <p class="font-weight-bold contras">"Moka datanya cloud jadi bisa diakses di mana saja dan kita bisa pantau bisnis dari mulai omset, stok, sampai barang yang efisien dan tidaknya."</p>
                                    <p class="contras">Fairtel Mong, Pemilik Ezo Cheesecake and Bakery</p>
                                    <p class="font-weight-bold">Toko Roti</p>
                                </div>
                                <div class="col-lg-6">
                                    <img class="d-block w-100" src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/testimonial/Ezo.jpg" alt="photo" width="400">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <!-- Modal HTML -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>        
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- END Testimoni -->

            <!-- Company -->
            <div class="col-lg-12 p-5">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a target="_blank" href="https://www.businesstimes.com.sg/startups/edbi-joins-us24m-series-b-funding-round-for-indonesian-pos-startup-moka">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/the-business-times.png" alt="the-business-times">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://ekonomi.kompas.com/read/2018/09/13/120600726/startup-moka-dapat-suntikan-dana-baru-24-juta-dollar-as-">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/kompas.png" alt="kompas">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://techcrunch.com/2018/09/13/moka-raises-24m/">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/tech-crunch.png" alt="tech-crunch">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="https://www.techinasia.com/moka-series-b">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/tech-in-asia-.png" alt="tech-in-asia">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a target="_blank" href="http://www.thejakartapost.com/multimedia/2017/03/18/moka-as-one-of-the-rising-indonesian-saas-players.html">
                            <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/the-jakarta-post.png" alt="the-jakarta-post">
                        </a>
                    </li>
                </ul> 
            </div> <!-- END Company -->

            <!-- Any question ? -->
            <div class="col-lg-12">
                <div class="row p-5">
                    <div class="col-lg-6">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/index/group-19@2x.png" alt="computer" width="400">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="text-header-moka">Punya pertanyaan?</h1>
                        <h4>Kami dapat membantu Anda untuk mengenal kami lebih baik dengan menyediakan langkah-langkah menggunakan Moka.</h4><br>
                        <button type="button" class="btn btn-lg btn-outline-info btn-rounded">Pelajari Lebih Lanjut</button>
                    </div>
                </div>
            </div>
            <!--  -->

            <hr class="col-lg-12">
            <div class="col-lg-12 p-5 text-center">
                <h1 class="text-header-moka">Mulai bisnis Anda dengan Moka</h1>
                <h4>Menjalankan bisnis bisa lebih efektif dan efisien dengan Moka sehingga Anda bisa fokus mengembangkan bisnis Anda.</h4><br>
                <button type="button" class="btn btn-lg btn-info btn-rounded">Coba Gratis Sekarang</button>
            </div>

        </div>
    </div>

</div> <!-- END Container -->

<div class="footer">
    <div class="container">
        <ul class="list-inline row justify-content-center align-self-center">
            <li class="list-inline-item">
                <h2 class="text-header-footer">Produk Software</h2>
                <ul class="list-footer">
                    <li>
                        <a href="/pos">Point of Sale</a>
                    </li>
                    <li>
                        <a href="#">Payments</a>
                    </li>
                    <li>
                        <a href="#">Capital</a>
                    </li>
                    <li>
                        <a href="#">Manajemen Meja</a>
                    </li>
                    <li>
                        <a href="#">Manajemen Inventori</a>
                    </li>
                    <li>
                        <a href="#">Manajemen Staff</a>
                    </li>
                    <li>
                        <a href="#">Manajemen Pelanggan</a>
                    </li>
                </ul>
            </li>
            <li class="list-inline-item">
                <h2 class="text-header-footer">Solusi Bisnis</h2>
                <ul class="list-footer">
                    <li>
                        <a href="#">Kedai Kopi</a>
                    </li>
                    <li>
                        <a href="#">Restorant</a>
                    </li>
                    <li>
                        <a href="#">Restorant Cepat Saji</a>
                    </li>
                    <li>
                        <a href="#">Toko Roti</a>
                    </li>
                    <li>
                        <a href="#">Retail</a>
                    </li>
                    <li>
                        <a href="#">Minimarket</a>
                    </li>
                    <li>
                        <a href="#">Barbershops & Salons</a>
                    </li>
                    <li>
                        <a href="#">Layanan Kecantikan</a>
                    </li>
                    <li>
                        <a href="#">Layanan Profesional</a>
                    </li>
                </ul>
            </li>
            <li class="list-inline-item">
                <h2 class="text-header-footer">Bantuan</h2>
                <ul class="list-footer">
                    <li>
                        <a href="#">Harga</a>
                    </li>
                    <li>
                        <a href="#">Hubungi Kami</a>
                    </li>
                    <li>
                        <a href="#">Support Center</a>
                    </li>
                    <li>
                        <a href="#">Video Tutorial</a>
                    </li>
                    <li>
                        <a href="#">Knowledge Center</a>
                    </li>
                    <li>
                        <a href="#">Panduan Pengguna</a>
                    </li>
                </ul>
            </li>
            <li class="list-inline-item">
                <h2 class="text-header-footer">Open Platform</h2>
                <ul class="list-footer">
                    <li>
                        <a href="#">Developers</a>
                    </li>
                    <li>
                        <a href="#">Getting Started</a>
                    </li>
                    <li>
                        <a href="#">API Reference</a>
                    </li>
                    <li>
                        <a href="#">Developer Terms</a>
                    </li>
                </ul>
            </li>
            <li class="list-inline-item">
                <h2 class="text-header-footer">Tentang Moka</h2>
                <ul class="list-footer">
                    <li>
                        <a href="#">Informais Moka</a>
                    </li>
                    <li>
                        <a href="#">Berita</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Karir</a>
                    </li>
                    <li>
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/footer/app-store.svg" alt="App Store">
                    </li>
                    <li>
                        <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/footer/play-store.svg" alt="Play Store">
                    </li>
                </ul>
            </li>
        </ul>

        <hr class="hr-footer">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/image.mokapos.com/growth/homepage/footer/id.svg" alt="Language flag">
                            </li>
                            <li class="list-inline-item">
                                <p>Bahasa Indonesia</p>  
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a target="_blank" title="Facebook" href="https://www.facebook.com/mokapos"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" title="Twitter" href="https://twitter.com/mokapos"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" title="Instagram" href="https://www.instagram.com/mokapos/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" title="Youtube" href="https://www.youtube.com/channel/UCLj9DxsNDYb5ITZb4Phxmyg"><i class="fa fa-youtube-play"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" title="Linkedin" href="https://www.linkedin.com/company/pt-moka-teknologi/"><i class="fa fa-linkedin-square"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" title="Google Plus" href="https://plus.google.com/112027935850101805703"><i class="fa fa-google-plus-official"></i></a>
                            </li>
                        </ul>
                    </div>                        
                </div>
            </div>
        <hr class="hr-footer">
        <section>
            <ul class="list-inline row justify-content-center align-self-center text-header-footer">
                <li class="list-inline-item">
                    <p>© <!-- -->Copyright 2020 PT Moka Teknologi Indonesia. All Rights Reserved.</p>   
                </li>
                <li class="list-inline-item">
                    <a href="">Sitemap</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Kebijakan Privasi</a>
                </li>
                <li class="list-inline-item">
                    <a href="#">Syarat dan Ketentuan</a>
                </li>
            </ul>
        </section>

    </div>
</div>
@endsection