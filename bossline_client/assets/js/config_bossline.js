var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">0' + (index + 1) + '</span>';
    },
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});


(function headlineYoutubeVideo() {
  var headlineList = document.querySelectorAll('[data-youtube-id]');

  if (headlineList.length <= 0) return;

  headlineList.forEach((headline) => {
    var ytId = headline.getAttribute('data-youtube-id');
    var btn = headline.querySelector('button');

    btn.addEventListener('click', function () {
      headline.innerHTML =
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/' +
        ytId +
        '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    });
  });
})();
