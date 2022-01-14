var formContainer = $('#form-container');

bindFormClick();
//Opening the form
function bindFormClick(){
  $(formContainer).on('click', function(e) {
    e.preventDefault();
    toggleForm();
    //Ensure container doesn't togleForm when open
    $(this).off();
  });
}

//Closing the form
$('#form-close, .form-overlay').click(function(e) {
  e.stopPropagation();
  e.preventDefault();
  toggleForm();
  bindFormClick();
});

function toggleForm(){
  $(formContainer).toggleClass('expand');
  $(formContainer).children().toggleClass('expand');
  $('body').toggleClass('show-form-overlay');
  $('.form-submitted').removeClass('form-submitted');
}

