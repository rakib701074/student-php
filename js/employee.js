$(document).on('click', '.addNew', function () {
  $('.addEmployeeProfile').attr('data-id', '');
  $('.employeeName,.employeeImage,.employeeDesciption').val('')
  $('#staticBackdrop').modal('toggle')
})

$(document).on('click', '.deleteEmployee', function () {
  var dataId = $(this).attr('data-id');
  // $('#removeBtn').attr('data-id', dataId);
  employeeName = $('.employeeName_' + dataId).text();
  swal({
    title: "Are you sure?",
    text: "are you sure delete " + employeeName + " profile",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      $('.employeeProfile_' + dataId).remove();
      swal("delete sucessfully", {
        icon: "success",
        buttons: false,
        timer: 1000,
      });
    } else {
      swal("not delete employeeProfile")
    }
  });
  
  //  $('#exampleModal').modal('toggle')
});
var employeeName = ''
var employeeDesciption = ''
$(document).on('click', '.updateEmployee', function () {
  $('.employeeName,.employeeImage,.employeeDesciption').val('')
  var dataId = $(this).attr('data-id');
  $('.addEmployeeProfile').attr('data-id', dataId);
  employeeName = $('.employeeName_' + dataId).text();
  employeeDesciption = $('.employeeDesciption_' + dataId).text();
  $('.employeeName').val(employeeName)
  $('.employeeDesciption').val(employeeDesciption)
  $('#staticBackdrop').modal('toggle')
});

// var employeeImage = ''
// $(document).on('click', '.updateEmployee', function () {
//   // $('.employeeImage').val('')
//   employeeProfile = employeeImage_`+ i +
//    `" src="image/` + employeeImage + `"

//   $('.employeeProfile').attr('data-id', dataId);
// });


$(document).ready(function () {
  $("#removeBtn").click(function () {
    var dataId = $(this).attr('data-id');
    $('.employeeProfile_' + dataId).remove();
  });
});




var i = 1;
$(document).on('click', '.addEmployeeProfile', function () {
  var dataId = $(this).attr('data-id');
  swal({
    title: "Sucessful",
    text: "welcome to our page",
    icon: "success",
    timer: 2000,
    buttons: false,
    visible: true,
  });
  var employeeName = $('.employeeName').val()
  var employeeImage = $('.employeeImage').val()
  var image = employeeImage.replace(/\\/g, '/').split('/');
  employeeImage = image[image.length - 1]

  var employeeDesciption = $('.employeeDesciption').val()
  if (dataId) {
    $('.employeeName_' + dataId).text(employeeName);
    $('.employeeDesciption_' + dataId).text(employeeDesciption);
    $("#staticBackdrop").modal('toggle')
    return false;
  }

  // if (employeeName == '' || employeeImage == '' || employeeDesciption == '') {
  //   $('.nameError,.desciptionError,.imageError').text('fill this form')
  //   return false;
  // }else if(employeeName.length < 7 || employeeName > 7)
  // {
  //   $('.nameError').text('this is so long')
  //   return false;
  // }else if(employeeDesciption.length < 200 || employeeDesciption > 200)
  // {
  //   $('.desciptionError').text('write 200 words')
  //   return true;
  // }else{
  //   $('.desciptionError').text('minimum 200 word vallid');
  //   return false;
  // }
  
  var employeeHtml = `<div class="col-sm-4 mb-3 employeeProfile_` + i + `">
    <div class="card">
      <img class="card-img-top employeeProfile employeeImage_`+ i + `" src="image/` + employeeImage + `">
      <div class="card-body">
        <h4 class="card-title employeeName_`+ i + `">` + employeeName + `</h4>
        <p class="card-text employeeDesciption_`+ i + `">` + employeeDesciption + `</p>
        <button type="button" class="btn btn-danger deleteEmployee" data-id="`+ i + `">
          Delete
        </button>
        <button type="button"  class="btn btn-primary updateEmployee"  data-id="`+ i + `">
          Update
        </button>
      </div>
    </div>
</div>`
  i++;
  $(".employeeAdd").append(employeeHtml);
  $("#staticBackdrop").modal('toggle')
});