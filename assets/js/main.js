// nav background
let header = document.querySelector("header");

window.addEventListener("scroll", () => {
    header.classList.toggle("shadow", window.scrollY > 0)
})

// Toggle visibility of additional text
const readMoreBtn = document.querySelector('.read-more');
const additionalText = document.querySelector('.additional-text');

readMoreBtn.addEventListener('click', function(event) {
  event.preventDefault(); // Prevent default anchor link behavior

  additionalText.classList.toggle('hidden');

  if (additionalText.classList.contains('hidden')) {
    readMoreBtn.textContent = 'Read more';
  } else {
    readMoreBtn.textContent = 'Read less';
  }
});


//Filter
$(document).ready(function () {
    $(".filter-item").click(function () {
        const value = $(this).attr("data-filter");
        if (value == "all"){
            $(".post-box").show("1000")
        } else{
            $(".post-box")
                .not("." + value)
                .hide(1000);
            $(".post-box")
            .filter("." + value)
            .show("1000")
        }
    });
    $(".filter-item").click(function () {
        $(this).addClass("active-filter").siblings().removeClass("active-filter")
    });
});