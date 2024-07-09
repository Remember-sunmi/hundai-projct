    $(document).ready(function () {
    // For the first tab menu
    $('.tabs1 nav ul li:first-child a').addClass('active');
    $('.tabs1 .content section:first-child').addClass('active');

    $('.tabs1 nav ul li a').click(function (e) {
      e.preventDefault();

      $('.tabs1 nav ul li a').removeClass('active');
      $(this).addClass('active');

      $('.tabs1 .content section').removeClass('active');
      var target = $(this).attr('href');
      $(target).addClass('active');
    });

    // For the second tab menu
    $('.tabs2 nav ul li:first-child a').addClass('active');
    $('.tabs2 .content section:first-child').addClass('active');

    $('.tabs2 nav ul li a').click(function (e) {
      e.preventDefault();

      $('.tabs2 nav ul li a').removeClass('active');
      $(this).addClass('active');

      $('.tabs2 .content section').removeClass('active');
      var target = $(this).attr('href');
      $(target).addClass('active');
    });
  });
 