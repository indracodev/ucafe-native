$(document).ready(function () {

   // merubah case text di title
   document.title = document.title.replace(/\b\w/g, function (char) {
      return char.toUpperCase();
   });

   // menambahkan class active disetiap carousel item pertama
   $('.carousel .carousel-inner .carousel-item:first-of-type').addClass('active');

   $('#carousel-related-product .carousel-control').css('bottom', ($('#carousel-related-product .figure-caption').height()));

   // media query screen
   if ($(window).width() >= 1400) {

      let items = document.querySelectorAll('#carousel-related-product .carousel-item')
      items.forEach((el) => {
         const minPerSlide = 5
         let next = el.nextElementSibling
         for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
               next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
         }
      });

   } else if ($(window).width() >= 1200) {

      let items = document.querySelectorAll('#carousel-related-product .carousel-item')
      items.forEach((el) => {
         const minPerSlide = 4
         let next = el.nextElementSibling
         for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
               next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
         }
      });

   } else if ($(window).width() >= 768) {

      let items = document.querySelectorAll('#carousel-related-product .carousel-item')
      items.forEach((el) => {
         const minPerSlide = 3
         let next = el.nextElementSibling
         for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
               next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
         }
      });

   } else if ($(window).width() >= 100) {

      let items = document.querySelectorAll('#carousel-related-product .carousel-item')
      items.forEach((el) => {
         const minPerSlide = 2
         let next = el.nextElementSibling
         for (var i = 1; i < minPerSlide; i++) {
            if (!next) {
               next = items[0]
            }
            let cloneChild = next.cloneNode(true)
            el.appendChild(cloneChild.children[0])
            next = next.nextElementSibling
         }
      });

   }

   // fungsi untuk merubah background section isntant series di halaman landing jika produk dihover
   if (window.matchMedia('(min-width: 992px)').matches) {
      $('#instant-cappuccino').on('mouseenter', function () {
         $('.page').css('background-color', 'var(--color-instant-cappuccino)');
      });
      $('#instant-original').on('mouseenter', function () {
         $('.page').css('background-color', 'var(--color-instant-original)');
      });
      $('#instant-hazelnut').on('mouseenter', function () {
         $('.page').css('background-color', 'var(--color-instant-hazelnut)');
      });
      $('#instant-mochaccino').on('mouseenter', function () {
         $('.page').css('background-color', 'var(--color-instant-mochaccino)');
      });
      $('#instant-latte').on('mouseenter', function () {
         $('.page').css('background-color', 'var(--color-instant-latte)');
      });
   }

});