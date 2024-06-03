<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <!--Animations css-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="css/style.css" />
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Gasoek+One&family=Inter:wght@300;400;600;700&family=Lilita+One&family=Sigmar&family=Ultra&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awsome JS -->
    <script
      src="https://kit.fontawesome.com/ba758572ed.js"
      crossorigin="anonymous"
    ></script>

    <link rel="shortcut icon" type="image/png" href="img/logo04.png" />
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <header>
      <nav
        id="nav1"
        class="navbar navbar-expand-lg"
        style="background-color: #db0000"
      >
        <div class="container">
          <a class="navbar-brand" href="index.php"
            ><img src="img/logo04.png" alt="Logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-theme="dark"
            style="background-color: #1a1a19"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li id="underline1" class="nav-item">
                <a class="nav-link" href="onama.php">O nama</a>
              </li>

              <li id="underline1" class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Programi
                </a>
                <ul class="dropdown-menu" style="background-color: #db0000">
                  <li>
                    <a class="dropdown-item" href="treninzi.php"
                      >Grupni treninzi</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="skidajKg.php"
                      >Skidaj kile</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="raspored.php">Raspored</a>
                  </li>
                </ul>
              </li>

              <li id="underline1" class="nav-item">
                <a class="nav-link" href="galerija.php">Galerija</a>
              </li>

              <li id="underline1" class="nav-item">
                <a class="nav-link" href="kontakt.php">Kontakt</a>
              </li>

              <li id="underline1" class="nav-item">
                <a class="nav-link" href="upis.php">Upiši se</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>