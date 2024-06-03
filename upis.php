<?php 
  $title = 'Upiši se';
  include_once 'components/header.php'; 
?>

    <section class="upis">
      <h1 class="heading-main u-center">Želim probni<span> trening!</span></h1>

      <div class="upis__container">
        <div class="upis__txt">
          <p>
            Ispuni obrazac i rezerviraj svoje mjesto na probnom treningu, a mi
            ćemo ti se javiti isti dan s povratnom informacijom tvog prvog
            besplatnog treninga!
          </p>
          <p><span>Polja označena zvjezdicom (*) su obavezna!</span></p>
        </div>

        <form action="#" class="form" id="form-upis">
          <div class="form__inputs">
            <div class="form__field">
              <label for="name">Ime i prezime: <span>*</span></label>
              <input
                type="text"
                id="name"
                placeholder="Unesite Vaše ime i prezime"
                required
              />
            </div>

            <div class="form__field">
              <h6>Spol: <span>*</span></h6>
              <div class="radio-input">
                <div class="spol">
                  <label for="muski">Muški spol </label>
                  <input
                    class="radio"
                    type="radio"
                    name="spol"
                    id="muski"
                    required
                  />
                </div>
                <div class="spol">
                  <label for="zenski">Ženski spol</label>
                  <input
                    class="radio"
                    type="radio"
                    name="spol"
                    id="zenski"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="form__field">
              <label for="email">E-mail: <span>*</span></label>
              <input
                type="email"
                id="email"
                placeholder="Unesite Vašu e-mail adresu"
                required
              />
            </div>

            <div class="form__field">
              <label for="telefon">Kontakt telefon: <span>*</span></label>
              <input
                type="number"
                id="telefon"
                placeholder="Unesite Vaš broj kontakt telefona"
                required
              />
            </div>

            <div class="form__field">
              <label for="adresa">Adresa: <span>*</span></label>
              <input
                type="text"
                id="adresa"
                placeholder="Unesite Vašu adresu stanovanja"
                required
              />
            </div>

            <div class="form__field">
              <label for="datum">Datum rođenja: <span>*</span></label>
              <input type="date" id="datum" required />
            </div>

            <div class="form__field">
              <label for="preporuka"
                >Kako ste čuli za nas?<span> *</span></label
              >
              <select
                id="preporuka"
                name="Preporuka"
                placeholder="Odaberite"
                required
              >
                <option selected disabled></option>
                <option value="friends">Obitelj/prijatelji</option>
                <option value="socials">Društvene mreže</option>
                <option value="media">Mediji</option>
                <option value="other">Ostalo</option>
              </select>
            </div>

            <div class="form__field">
              <label for="poruka">Vaša poruka:</label>
              <textarea id="poruka" name="poruka">Unesite Vašu poruku</textarea>
            </div>
          </div>

          <div class="form__btn">
            <button type="submit" class="btn show-popup">
              Pošalji<i class="fa-regular fa-paper-plane"></i>
            </button>
          </div>
        </form>
      </div>
      <!--End upisi__container-->
    </section>

    <div class="popup">
      <img src="img/icons/class.png" alt="Uspjeh!" />
      <h2>Vaš zahtjev je zaprimljen!</h2>
      <p>Naši treneri će Vam se uskoro javiti s terminom probnog treninga.</p>
      <button class="popup__close">&times;</button>
    </div>
    <div class="popup-overlay"></div>


<?php 
  include 'components/footer.php';
?>
