function validateNumber(event) {
  var keyCode = event.keyCode;
  var excludedKeys = [8, 37, 39, 46];
  if (!((keyCode >= 48 && keyCode <= 57) ||
      (keyCode >= 96 && keyCode <= 105) ||
      (excludedKeys.includes(keyCode)))) {
    console.log("alphabets are not allowed");
    event.preventDefault();
  }
  console.log("keycode: " + keyCode);
}

$(document).ready(function() {
  $('form').submit(function(event) {
    event.preventDefault();
    $.ajax({
      type: $(this).attr('method'),
      url: $(this).attr('action'),
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function (result) {
        alert(result);
      }
    });
    document.getElementById("bookForm").reset();
  });
});

