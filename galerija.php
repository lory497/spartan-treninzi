<?php 
  $title = 'Spartan galerija';
  include_once 'components/header.php'; 
?>

    <section class="galerija">
      <h2 class="heading-main u-center"><span>Spartan</span> galerija</h2>

      <div class="galerija__slike">
        <h3 class="u-center heading-2nd">Slike</h3>

        <div id="gallery">
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery1.jpg"
              ><img src="img/galerija/gallery1.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery2.jpg"
              ><img src="img/galerija/gallery2.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery3.jpg"
              ><img src="img/galerija/gallery3.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery4.jpg"
              ><img src="img/galerija/gallery4.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery5.jpg"
              ><img src="img/galerija/gallery5.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery6.jpg"
              ><img src="img/galerija/gallery6.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery7.jpg"
              ><img src="img/galerija/gallery7.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery8.jpg"
              ><img src="img/galerija/gallery8.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery9.jpg"
              ><img src="img/galerija/gallery9.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery10.jpg"
              ><img src="img/galerija/gallery10.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery11.jpg"
              ><img src="img/galerija/gallery11.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery12.jpg"
              ><img src="img/galerija/gallery12.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery13.jpg"
              ><img src="img/galerija/gallery13.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery14.jpg"
              ><img src="img/galerija/gallery14.jpg"
            /></a>
          </div>
          <div>
            <a data-fancybox="galerija" href="img/galerija/gallery15.jpg"
              ><img src="img/galerija/gallery15.jpg"
            /></a>
          </div>
        </div>
      </div>

      <div class="galerija__video">
        <h3 class="u-center heading-2nd">Video</h3>

        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <iframe
                src="https://www.youtube.com/embed/kpYsu92k9ZE"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="swiper-slide">
              <iframe
                src="https://www.youtube.com/embed/naVQkZU1PqI"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="swiper-slide">
              <iframe
                src="https://www.youtube.com/embed/dvUhfNKkQ6c"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="swiper-slide">
              <iframe
                src="https://www.youtube.com/embed/tHaBsWOk1jc"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div class="swiper-slide">
              <iframe
                src="https://www.youtube.com/embed/tQ9INDParyw"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>

<?php 
  include 'components/footer.php';
?>
