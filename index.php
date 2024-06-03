<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!--Animations css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css">
    
    
    <!-- Font Awsome JS -->
  <script src="https://kit.fontawesome.com/ba758572ed.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/png" href="img/logo04.png">
    <title>Spartan treninzi by Tomislav Siser</title>

</head>
    <body>

      <div class="loader">
        <img src="img/logo04.png" alt="stranica se učitava...">
      </div>

      <script>const loader = document.querySelector(".loader");
        console.log(loader);
        
        function vanish() {
          loader.classList.add("disappear");
        }
        
        window.addEventListener("load", vanish);</script>
      <header>
        <nav class="navbar navbar-expand-lg " >
            <div class="container">
              <a class="navbar-brand" href="index.php"><img src="img/logo_2.png" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-theme="dark" style="background-color: #db0000;" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li id="underline" class="nav-item">
                    <a class="nav-link" href="onama.php">O nama</a>
                  </li>
                  
                  <li id="underline" class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Programi
                    </a>
                    <ul id="dropdown1" class="dropdown-menu">
                      <li><a class="dropdown-item" href="treninzi.php">Grupni treninzi</a></li>
                      <li><a class="dropdown-item" href="skidajKg.php">Skidaj kile</a></li>
                      <li><a class="dropdown-item" href="raspored.php">Raspored</a></li>
                    </ul>
                  </li>
    
                  <li id="underline" class="nav-item">
                    <a class="nav-link" href="galerija.php">Galerija</a>
                  </li>
    
                  <li id="underline" class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
                  </li>
    
                  <li id="underline" class="nav-item">
                    <a class="nav-link" href="upis.php">Upiši se</a>
                  </li>
                  
                </ul>
              </div>
            </div>
          </nav>
    </header>

        !--<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            
            <div class="carousel-inner">
              <div id="bg-1" class="carousel-item active" data-bs-interval="10000"">
                &bne;
                <div class="carousel-caption">
                  <h4>samo za</h4>
                  <h2>Najupornije </h2>
                  <h1>Spartance!</h1>
                </div>
              </div>
              <div id="bg-2" class="carousel-item" data-bs-interval="10000">
                &bne;
                <div class="carousel-caption">
                  <h4>samo za</h4>
                  <h2>Najupornije </h2>
                  <h1>Spartance!</h1>
                </div>
              </div>
              
            </div>
           
          </div>


          <!--================================================== SPARTAN ========================================================-->

          <section class="spartan">
            
            <div class="spartan__container">
              <h2 class="heading-main u-center">Što su to <span>Spartan </span>treninzi?</h2>
              <div class="spartan__text">
                <p class="paragraph">Spartan treninzi su grupni, funkcionalni i visoko intenzivni treninzi<br>Sastoje se od kombinacija više različitih oblika vježbanja<br>Učinit će vas izdržljivijima i zadovoljnijima<br>Vidjet ćete promjene već kroz mjesec dana<br>Bolje ćete se osjećati i izgledati</p>
              </div>
            </div>
          </section>
       
          <!--================================================== SPARTAN TRENINZI ========================================================-->
          
        <section class="treninzi">
          <div class="treninzi__container">
            <h2 class="heading-main u-center"><span>Spartan </span>treninzi</h2>
        
            <!-- Swiper -->
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper__content">
                    <div class="swiper__icon"><img src="img/icons/004-watch.png" alt=""></div>
                    <div class="swiper__program"><h3 class="heading-2nd">Start out</h3></div>
                    <div class="swiper__opis">
                      <p class="paragraph-card">Grupe od 20 do 30 polaznika. Treninzi se održavaju prijepodne i navečer. Program prilagođen <strong>svim vrstama vježbača, a posebno početnicima</strong>...</p>
                    </div>
                    <a href="treninzi.php#program-start" id="btn-dark" class="btn">saznaj više &nbsp; &gt; </a>
                  </div>
              </div>
                <div class="swiper-slide">
                  <div class="swiper__content">
                    <div class="swiper__icon"><img src="img/icons/003-weight.png" alt=""></div>
                  <div class="swiper__program"><h3 class="heading-2nd">Bodyweight</h3></div>
                  <div class="swiper__opis">
                    <p class="paragraph-card">Grupe od 20 do 30 polaznika. Poslijepodnevno-večernji termini programa. Bodyweight – HIIT (high intensity interval training) je funkcionalni trening ...</p>
                  </div>
                  <a href="treninzi.php#program-body" id="btn-dark" class="btn">saznaj više &nbsp; &gt; </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper__content">
                    <div class="swiper__icon"><img src="img/icons/001-dumbell.png" alt=""></div>
                    <div class="swiper__program"><h3 class="heading-2nd">Spartan</h3></div>
                    <div class="swiper__opis">
                      <p class="paragraph-card">Grupe od 20 do 30 polaznika. Poslijepodnevni termini programa koji je isključivo <strong>namijenjen osobama koje se redovno bave sportom</strong> (min 3 puta tjedno treniraju unazad 6 mj.)...</p>
                    </div>
                    <a href="treninzi.php#program-spartan" id="btn-dark" class="btn">saznaj više &nbsp; &gt; </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper__content">
                  <div class="swiper__icon"><img src="img/icons/008-weightlifter-frontal-silhouette.png" alt=""></div>
                  <div class="swiper__program"><h3 class="heading-2nd">Spartan lift</h3></div>
                  <div class="swiper__opis">
                    <p class="paragraph-card">Grupe od 20 do 25 polaznika. Trening se izvodi u poslijepodnevnim terminima, a <strong>namijenjen je naprednim vježbačima</strong> koji uvijek žele dati svoj maksimum...</p>
                  </div>
                  <a href="treninzi.php#program-lift" id="btn-dark" class="btn">saznaj više &nbsp; &gt; </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper__content">
                  <div class="swiper__icon"><img src="img/icons/005-fit.png" alt=""></div>
                  <div class="swiper__program"><h3 class="heading-2nd">Skidaj kile</h3></div>
                  <div class="swiper__opis">
                    <p class="paragraph-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio consequatur temporibus error harum? Earum consequuntur ratione modi eum accusamus, hic, blanditiis exercitationem velit.</p>
                  </div>
                  <a href="skidajKg.php" id="btn-dark" class="btn">saznaj više &nbsp; &gt; </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper__content">
                  <div class="swiper__icon"><img src="img/icons/001-happy-children.png" alt=""></div>
                  <div class="swiper__program"><h3 class="heading-2nd">Spartan kids</h3></div>
                  <div class="swiper__opis">
                    <p class="paragraph-card">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod,
                      tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                  <a href="treninzi.php#program-kids" id="btn-dark" class="btn">saznaj više &nbsp; &gt; </a>
                </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          

    </section>

    <!--================================================== TRENINZI NUDE ========================================================-->

    <section class="ponuda">

      <div class="ponuda__container">
        <h2 class="heading-main u-center"><span>Spartan</span> treninzi nude:</h2>
        <div class="ponuda__col">
          <div class="ponuda__colx">
            <div class="ponuda__heading">
              <img src="img/icons/001-tech-support.png" alt="">
              <h3 class="heading-2nd">Savjete</h3>
            </div>
            <p class="paragraph">Individualni pristup, prevencijske vježbe, edukacija o pravilnom izvođenju vježbi, odabir prehrane u svrhu podizanja snage i izdržljivosti, ali i same redukcije - skidanje kila ...</p>
          </div>
          <div class="ponuda__colx">
            <div class="ponuda__heading"> 
              <img src="img/icons/002-nutrition.png" alt="">
              <h3 class="heading-2nd">Osobni plan prehrane</h3>
            </div>
            <p class="paragraph">Izrada plana i programa prehrane na zahtjev člana, prilagođenog njegovim ciljevima, bilo da su oni povećanje mase, topljenje masnih naslaga ili prevencija u svrhu zdravog načina prehrane.</p>
            
          </div>
        </div>

      </div>
    </section>

    <section class="upisi">
      <div class="upisi__content">
        <h2 class="heading-main">Želiš otkriti je li <span>Spartan</span><br>odgovarajući trening za tebe?</h2>

        <p class="paragraph">Pridruži nam se na besplatnom probnom treningu kako bi uz pomoć naših trenera <br> saznao/la sve potrebne informacije.</p>
        <a href="upis.php" id="btn-red" class="btn">želim probni trening</a>
      </div>
     
    </section>

    
    <section class="treneri">

      <h2 class="heading-main u-center"><span> Spartan</span> treneri</h2>

      <div class="treneri__container">
        <div class="treneri__card">
          <div class="treneri__img">
            <img src="img/home/trener01.jpg" alt="">
          </div>
          <div class="treneri__content">
            <h3 class="heading-2nd">Tihomir Siser</h3>
            <p class="paragraph-card">Strast prema bodybuildingu i fitnessu pojavila se još prije 45 godina, zbog koje je i u konačnici otvorio vlastitu teretanu. Od 2007. godine odlazi trenirati u američke kampove te se nakon deset godina upijanja znanja i iskustva vraća u Sl. Brod i priključuje Spartan timu.</p>
          </div>
        </div>

        <div class="treneri__card">
          <div class="treneri__img">
            <img src="img/home/trener02.jpg" alt="">
          </div>
          <div class="treneri__content">
            <h3 class="heading-2nd">Marika Stilinović</h3>
            <p class="paragraph-card">Sportom se bavi od svoje 10.godine a ima i više sportskih ljubavi, od rukometa, odbojke, jahanja, trčanja, joge, pilatesa pa sve do crossfit-a. Svoju ljubav i hobi uspješno je pretvorila u posao te je trenutno certificirana trenerice joge i pilatesa u Spartanu.</p>
          </div>
        </div>

        <div class="treneri__card">
          <div class="treneri__img">
            <img src="img/home/trener03.jpg" alt="">
          </div>
          <div class="treneri__content">
            <h3 class="heading-2nd">Tomislav Siser</h3>
            <p class="paragraph-card">Alfa i omega trenerskog tima, osnivač te čovjek po kojem sportski centar Spartan Treninzi nosi ime. Veliki zaljubljenik i entuzijast ovakvog oblika treniranja s 20 godina iskustva u istom. Za više informacija o treneru ipak ćete morati skoknuti do dvorane! ;)</p>
          </div>
        </div>
      </div>

    </section>

  <?php 
    include 'components/footer.php';
   ?>