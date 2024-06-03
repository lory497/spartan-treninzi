// Loader

// Before-after transformacije slider

const containers = document.querySelectorAll(".transformacije__container");

containers.forEach((container) => {
  container.querySelector(".slider").addEventListener("input", (e) => {
    container.style.setProperty("--position", `${e.target.value}%`);
  });
});

// FANCY BOX

Fancybox.bind("[data-fancybox]", {
  // Transition effect when changing gallery items
  Carousel: {
    transition: "slide",
  },
  // Disable image zoom animation on opening and closing
  Images: {
    zoom: false,
  },
  // Custom CSS transition on opening
  showClass: "f-fadeIn",
});

// SWIPER

// SLIDER HOME

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    700: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// SLIDER VIDEO

var swiper = new Swiper(".swiper", {
  slidesPerView: 3,
  spaceBetween: 30,
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    700: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

// Upisi form & popup
const form = document.querySelector("form");
const btnOpen = document.querySelector(".show-popup");
const btnClose = document.querySelector(".popup__close");
const popup = document.querySelector(".popup");
const overlay = document.querySelector(".popup-overlay");
const requiredFields = document.querySelectorAll(".form [required]");


// Funkcija provjere ispunjenosti inputa
function validateForm() {
  for (let i = 0; i < requiredFields.length; i++) {
    if (!requiredFields[i].checkValidity()) {
       // ako required field nije ispunjeno, return false
      return false;
    }
  }
  // Ako su svi traženi inputi  ispunjeni
  return true;
}

form.addEventListener("submit", function (e) {
  // Prevent the form from submitting (page reload)
  e.preventDefault();

  // Kad su svi teraženi inputi popunjeni
  if (validateForm()) {
    // Prikaži popup
    overlay.classList.add("overlay-open");
    popup.classList.add("popup-open");
  }
});

const closePopup = function () {
  popup.classList.remove("popup-open");
  overlay.classList.remove("overlay-open");
};

btnClose.addEventListener("click", closePopup);
overlay.addEventListener("click", closePopup);

document.addEventListener("keydown", function (e) {
  console.log(e.key);
  if (e.key === "Escape" && !popup.classList.contains("hidden")) {
    closePopup();
  }
});
