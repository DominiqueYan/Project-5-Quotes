 (function ($) {
    $('#another-one').on('click', function (event) {
      console.log('clicked');
      event.preventDefault();
      $.ajax({
        method: 'GET',
        url: qod_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
    
      }).done(function (response) {
        $('.entry-content').html(response[0].content.rendered),
        $('.entry-title').html(response[0].title.rendered)
        $('.source').html(response[0]._qod_quote_source)
        console.log(response[0]._qod_quote_source_url)
        console.log(response[0])
      });
    });
    })(jQuery);