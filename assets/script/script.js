// header start here
document.querySelector(".menu").addEventListener("click", () => {
  document.querySelector("header nav").classList.add("navactive");
});
document.querySelector(".close").addEventListener("click", () => {
  document.querySelector("header nav").classList.remove("navactive");
});

window.addEventListener('scroll',()=>{
  if (window.scrollY > 80) {
    document.querySelector('header').classList.add('fixedclass');
  } else {
    document.querySelector('header').classList.remove('fixedclass');
  }
})

// header end here
$(".fleet-carousel").owlCarousel({
  loop: false,
  nav: true,
  dots:false,
  navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"],
  responsive: {
    0: {
      items: 1,
      margin: 10,
    },
    700: {
      items: 2,
      margin: 20,
    },
    1000: {
      items: 3,
      margin: 30,
    },
    1200: {
      items: 3.5,
      margin: 50,
    },
    1600: {
      items: 3.5,
      margin: 100,
    },
  },
});
$(".fleet-single-carousel").owlCarousel({
  loop: false,
  nav: true,
  dots: false,
  margin: 30,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
    },
    700: {
      items: 1.9,
    },
  },
});

// service carousel start here
$(".service-carousel").owlCarousel({
  loop: false,
  nav: true,
  dots: false,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
      margin: 10,
    },
    700: {
      items: 2,
      margin: 20,
    },
    1000: {
      items: 3,
      margin: 30,
    },
    1200: {
      items: 4.5,
      margin: 40,
    },
    1600: {
      items: 4.5,
      margin: 40,
    },
  },
});
$(".testimonial-carousel").owlCarousel({
  loop: false,
  nav: true,
  dots: false,
  items: 1,
  navText: [
    "<i class='fa-solid fa-arrow-left-long'></i>",
    "<i class='fa-solid fa-arrow-right-long'></i>",
  ],
});
// faq accordion start here
$(document).ready(function () {
  $(".accordion-list > li > .answer").hide();

  $(".accordion-list > li").click(function () {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".answer").slideUp();
    } else {
      $(".accordion-list > li.active .answer").slideUp();
      $(".accordion-list > li.active").removeClass("active");
      $(this).addClass("active").find(".answer").slideDown();
    }
    return false;
  });
});

    // fleet main page start here
    const dropdownContent = document.querySelector(".fleet-dropdown-content");
    console.log(dropdownContent);
    const categoryCards = document.querySelectorAll(".main-fleet-carousel");

    const alldropdownItems = document.querySelectorAll(
      ".fleet-dropdown-content  .dropdown-item"
    );
    alldropdownItems.forEach((item) => {
      item.addEventListener("click", () => {
        document.querySelector(".fleet-dropbtn span").innerText =
          item.innerText;
      });
    });

    dropdownContent.addEventListener("click", function (event) {
      const selectedCategory = event.target.dataset.category; // Get selected category
      // Hide all cards first
      categoryCards.forEach((card) => (card.style.display = "none"));

      // Show the matching card
      categoryCards.forEach((card) => {
        if (card.dataset.category === selectedCategory) {
          card.style.display = "flex";
          card.classList.add("main-fleet-active");
        } else {
          card.classList.remove("main-fleet-active");
        }
      });
    });
    //   pagination start here
    var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 6;

    items.slice(perPage).hide();

    $("#pagination-container").pagination({
      items: numItems,
      itemsOnPage: perPage,
      prevText: "<i class='fa-solid fa-arrow-left'></i>",
      nextText: "<i class='fa-solid fa-arrow-right'></i>",
      onPageClick: function (pageNumber) {
        var showFrom = perPage * (pageNumber - 1);
        var showTo = showFrom + perPage;
        items.hide().slice(showFrom, showTo).show();
      },
    });