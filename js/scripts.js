 (function ($) {
    $('#another-one').on('click', function (event) {
      console.log('clicked');
      event.preventDefault();
      $.ajax({
        method: 'GET',
        url: qol_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
    
      }).done(function (response) {
        console.log(response[0]);
      });
    });
    })(jQuery);