  $(window).on('load', function () {
    $preloader = $('.preloader'),
      $loader = $preloader.find('.loader');
    $loader.fadeOut(22000);
    $preloader.delay(4000).fadeOut('slow');
  });
