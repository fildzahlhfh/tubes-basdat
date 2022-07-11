<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/css/all.css">
    <title>Pemrograman Web</title>
  </head>
  
  <body>
    <header>
      @include('partials.header')
    </header>
    <section>
      <div class="kiri">
        @yield('content')
      </div>
      <div class="kanan">
        <div class="most-popular">
          <h2>Most Popular</h2>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cari disini..." aria-label="Search">
            <button class="btn btn-dark" type="submit">Search</button>
          </form>
          <article>
            <figure>
              <img src="images/news14.jpg" class="popular">
            </figure>
            <h4><a href="mp1.html">Kopi Kenangan Variasikan Produk Kopi Jadi Body Scrub dan Lip Scrub</a></h4>
          </article>
          <article>
            <figure>
              <img src="images/news10.jpg" class="popular">
            </figure>
            <h4><a href="#">Kynd Beauty Rilis Produk Kuteks Halal</a></h4>
          </article>
          <article>
            <figure>
              <img src="images/news11.jpg" class="popular">
            </figure>
            <h4><a href="#">Produk Kecantikan YSL Luncurkan Official Online Store</a></h4>
          </article>
          <article>
            <figure>
              <img src="images/news12.jpg" class="popular">
            </figure>
            <h4><a href="#">Produk Kecantikan Korea Masih Jadi Tren di 2022</a></h4>
          </article>
          <article>
            <figure>
              <img src="images/news13.jpg" class="popular">
            </figure>
            <h4><a href="#">Mengenal Paraben dalam Produk Kosmetik</a></h4>
          </article>
        </div>
      </div>
    </section>
    @include('partials.footer')
  </body>
</html>