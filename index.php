<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="gambar/logo.jpg" href="gambar/logo.jpg">
    <title>Pemuda Muslim</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>    
<body  class="is-preload">
<?php
session_start();
if(isset($_SESSION['email'])) {
// ----------------------------------CONTENT HERE---------------------------------- //

} else {
    echo '<script>window.location.replace("./login.php");</script>';
}
?>
  <!-- Wrapper -->
    <div id="wrapper">
  <!-- Main -->
      <div id="main">
        <div class="inner">
  <!-- Header -->
          <header id="header">
            <a href="index.html" class="logo"><strong>Pemuda</strong>Muslim</a>
              <ul class="icons">
                <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></</li>
                <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
                <li><a href="#" class="icon brands fa-whatsapp"><span class="label">Instagram</span></a></li>
                <a href="./logout.php" class="button">Logout</a>
              </ul>
          </header>
            <marquee>ahlan wa sahlan (أهلا وسهلا) </marquee>
  <!-- Banner -->
    <section id="banner">
      <div class="content">
        <header>
          <p> “Sungguh pemuda itu distandarisasi dari kualitas ilmu dan ketakwaannya. Jika keduanya tidak melekat pada struktur kepribadiannya. Ia tidak layak disebut pemuda. Pemuda hari ini adalah pemimpin di masa depan” –Imam Syafi’i"</p>
          <ul class="actions">
            <li><a href="generic.html" class="button big">ulasan</a></li>
          </ul>
        </div>
          <span class="image object">
            <a href="generic.html" download="#"></a>
            <img src="gambar/1.jpg" alt="#">
          </span>
    </section>
  <!-- Section -->
    <section>
        <header class="major">
            <h2>Umum</h2>
        </header>
      <div class="posts">
              <article>
              <a href="#" class="image"><img src="gambar/kitab.jpeg" alt="" /></a>
        <div class="content">
                <h3>Sirah Nabawiyah</h3>
                <p><blockquote>لَّقَدْ كَانَ لَكُمْ فِي رَسُولِ اللهِ أُسْوَةٌ حَسَنَةٌ لِّمَن كَانَ يَرْجُوا اللهَ وَالْيَوْمَ اْلأَخِرَ وَذَكَرَ اللهَ كَثِيرًا</blockquote>“Sesungguhnya telah ada pada (diri) Rasulullah itu suri teladan yang baik bagimu (yaitu) bagi orang yang mengharap (rahmat) Allah dan (kedatangan) hari kiamat dan dia banyak menyebut Allah.” (Al Ahzab : 21)</p>
          </div>
              </article>
              <article>
              <a href="qasidah/gs/gs.html" class="image"><img src="gambar/pic01.png" alt="" /></a>
              <div class="content">
                  <h3>Syair Ulama Salaf</h3>
                  <p>Syair dalam bahasa Arab berasal dari kata syu’ur yang berarti perasaan. Maka pengertian syair adalah ungkapan pemikiran dan perasaan seseorang.Biasanya syair digunakan dalam mengilustrasikan hal-hal kompleks seperti cerita agama, cinta, nasihat dan lain sebagainya. Beberapa hal tersebur membuat bait-bait pada syair menjadi lebih banyak dan panjang.</p>
              </div>
              </article>
              <article>
              <a href="#" class="image"><img src="gambar/110.jpg"></a>  
              <div class="content">
                <h3>Kota Para Wali</h3>
                <p><blockquote>عَنْ النَّبِيِّ صَلَّى اللَّهُ عَلَيْهِ وَسَلَّمَ : «أَتَاكُمْ أَهْلُ الْيَمَنِ هُمْ أَرَقُّ أَفْئِدَةً * الْإِيمَانُ يَمَانٍ وَالْفِقْهُ يَمَانٍ وَالْحِكْمَةُ يَمَانِيَةٌ »</blockquote><br>"Telah tiba dihadapan kalian orang-orang Yaman. Mereka itu adalah orang-orang yang berhati sangat lembut * Keimanan itu ada pada orang Yaman. Fiqh itu ada pada orang Yaman. Dan hikmah itu pun ada pada orang Yaman."</p>
              </div>
              </article>
              <article>
              <span class="icon solid fa-signal"></span>
          <div class="content">
            <h3>Sed magna finibus</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
          </div>
        </article>
      </div>
    </section>

              <!-- Section -->
                <section>
                  <header class="major">
                    <h2>Untaian Hikmah</h2>
                  </header>
                  <div class="posts">
                    <article>
                      <video width="320" height="240" controls>
                      <source src="video/video1.mp4" type="video/mp4">
                      </video>  
                      <h3>Syekh Mutawalli Sya'rawi</h3>
                      <p></p>
                      <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                      </ul>
                    </article>
                    <article>
                      <video width="320" height="240" controls>
                      <source src="video/video2.mp4" type="video/mp4">
                      </video>  
                      <h3>Nulla amet dolore</h3>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                      <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                      </ul>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
                      <h3>Tempus ullamcorper</h3>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                      <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                      </ul>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                      <h3>Sed etiam facilis</h3>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                      <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                      </ul>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                      <h3>Feugiat lorem aenean</h3>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                      <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                      </ul>
                    </article>
                    <article>
                      <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                      <h3>Amet varius aliquam</h3>
                      <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                      <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                      </ul>
                    </article>
                  </div>
                </section>

            </div>
          </div>

        <!-- Sidebar -->
          <div id="sidebar">
            <div class="inner">

              <!-- Search -->
                <section id="search" class="alt">
                  <form method="post" action="#">
                    <input type="text" name="query" id="query" placeholder="Search" />
                  </form>
                </section>

              <!-- Menu -->
                <nav id="menu">
                  <header class="major">
                    <h2>Menu</h2>
                  </header>
                  <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="generic.html">Ulasan</a></li>
                    <li><a href="elements.html">Al-Kalam</a></li>
                    <li>
                      <span class="opener">Media</span>
                      <ul>
                        <li><a href="music.html">Qasidah & Gambus</a></li>
                        <li><a href="#">Untaian Hikmah</a></li>
                        <li><a href="#">Gambar</a></li>
                      </ul>
                    </li>
                    <li>
                      <span class="opener">Kisah & Perjalanan</span>
                      <ul>
                        <li><a href="kisah/kisah.html">Kisah Salaf Soleh</a></li>
                        <li><a href="#">Ahlul Bait Nabi</a></li>
                        <li><a href="#">Kilafah Islam</a></li>
                        <li><a href="#">Sejarah</a></li>
                      </ul>
                    </li>
                    <li>
                      <span class="opener">Kitab</span>
                      <ul>
                        <li><a href="Simtudduror.html">Simtudduror</a></li>
                        <li><a href="#">Diba'i</a></li>
                        <li><a href="#">Barzanzi</a></li>
                        <li><a href="#">adhiya ulami</a></li>
                        <li><a href="#">Burdah</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Jadwal Majelis</a></li>
                    <li><a href="#">Hizib</a></li>
                    <li><a href="#">Doa</a></li>
                    <li><a href="#">Kalender Islam</a></li>
                  </ul>
                </nav>

              <!-- Section -->
                <section>
                  <header class="major">
                    <h2>KEUTAMAAN SHALAT BERJAMA'AH</h2>
                  </header>
                  <blockquote class="arab2">من حافظ على الصلوات الخمس في جماعة فقد ملأ البر والبحر عبادة <br>"Barangsiapa menjaga shalat lima waktu secara berjama'ah maka sungguh ia seakan telah memenuhi dataran dan lautan dengan ibadah". 
                  [Hilyatul Auliya : 2/160)</blockquote>
                  <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="https://accounts.google.com/signin/v2/identifier?hl=id&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&flowName=GlifWebSignIn&flowEntry=AddSession">muhamadalim424@gmail.com</a></li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                    Nashville, TN 00000-0000</li>
                  </ul>
                </section>

              <!-- Footer -->
                <footer id="footer">
                  <p class="copyright">Copyright&copy;2019 PemudaMuslim.</p>
                </footer>

            </div>
          </div>

      </div>
<!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      
</body>
</html>