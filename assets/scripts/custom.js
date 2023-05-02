import $ from 'jquery'

$(window).scroll(function () {
  const logo = $('.logo')
  if ($(this).scrollTop() > 100) {
    logo.addClass('logo--small')
  } else {
    logo.removeClass('logo--small')
  }
})
