import $ from 'jquery'

$(document).ready(function () {
  $('#showcontactFormWrapper').click(function () {
    $('#contactFormWrapper').toggle()
  })
  $('#hidecontactFormWrapper').click(function () {
    $('#contactFormWrapper').hide()
  })
})
