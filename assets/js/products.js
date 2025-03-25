$(document).ready(function () {
   $('.marketplace-link').each(function () {
      // Memeriksa apakah href ada dan tidak kosong
      if ($(this).attr('href') && $(this).attr('href') !== '#') {
         $(this).addClass('d-block'); // Tambahkan kelas d-block
      } else {
         $(this).addClass('d-none'); // Tambahkan kelas d-none
      }
   });
});