$(document).on('click','.addNew',function(){
    $('.employeeName,.employeeImage,.employeeDesciption').val('')
    // $('.employeeName').val('')
    // $('.employeeImage').val('')
    // $('.employeeDesciption').val('')
    $("#staticBackdrop").modal('toggle')
})  

$(document).on('click', ".addEmployeeProfile", function () {
    var employeeName = $('.employeeName').val()

    var employeeImage = $('.employeeImage').val()
    var image =  employeeImage.replace(/\\/g, '/').split('/');
    employeeImage = image[image.length-1]

    var employeeDesciption = $('.employeeDesciption').val()

    var employeeHtml = `<div class="col-sm-4 mb-3">
          <div class="card">
            <img class="card-img-top employeeProfile" src="image/`+employeeImage+`">
            <div class="card-body">
              <h4 class="card-title">`+employeeName+`</h4>
              <p class="card-text">`+employeeDesciption+`</p>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Delete
              </button>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#">
                Update
              </button>
            </div>
          </div>
    </div>`
    $(".employeeAdd").html(employeeHtml);
    $('#staticBackdrop').modal('toggle')
});





// validation ..////
    // if(employeeName == ''){
    //   $('.nameError').text('this field is required')
    //   return false;
    // }else{
    //   $('.nameError').text('')
    // }

    // if(employeeImage == ''){
    //   $('.imageError').text('this field is required')
    //   return false;
    // }else{
    //   $('.imageError').text('')
    // }
    
    // if(employeeDesciption == ''){
    //   $('.descriptionError').text('this field is required')
    //   return false;
    // }else{
    //   $('.descriptionError').text('')
    // }

