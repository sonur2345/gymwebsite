function upperCashF(a) {
  setTimeout(function () {
    a.value = a.value.toUpperCase();
  }, 1);
}
function myFunctiontrial() {
  // $('#div_trial').slideDown();
  $("#enquiry_div_trial").slideToggle("slow");
  $("#btn_trial").slideToggle("slow");
  $("#enqyriyfollowup").slideToggle("slow");

  $('#enq_msg').html('');
}
function btn_trialcancel() {
  $("#enquiry_div_trial").slideToggle("slow");
  $("#btn_trial").slideToggle("slow");
  $("#enqyriyfollowup").slideToggle("slow");

}

// role manage 
$("#role_manage_btn").click(function () {
  $('#staticAddRoleForm').modal('show');
});

// Emloyee manage 
$("#Employee_manage_btn").click(function () {
  $('#staticAddEmloyeeForm').modal('show');
});


//empoyee edit manage
// $("#staticAddEmloyeeForm").click(function () {
//   $('#staticAddEmloyeeForm').modal('show');
// });

// add employee form

$('.shifts1').click(function () {
  $('#entrytime,#entrytime1,#entrytime2,#exittime,#exittime1,#exittime2').val('');
  if ($(this).val() == 'fullshifts1') {
    $('.fullshifts1').show('show');
    $('.splitshifts1').hide('show');
  } else {
    $('.fullshifts1').hide('show');
    $('.splitshifts1').show('show');
  }

});