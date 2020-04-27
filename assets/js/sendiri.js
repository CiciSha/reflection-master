 // embuat javascript untuk memunculkan collapse pada div sidebar-collapse ketika dibuka di mobile -->

 $(window).bind("load resize", function()
  {
    if ($(this).width() < 768)
    {
      $('div.sidebar-collapse').addClass('collapse')
    }
    else
    {
      $('div.sidebar-collapse').removeClass('collapse')
    }
  })