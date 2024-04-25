<?php include ('header.php') ?>
<!-- Update Modal -->
<main class="mt-5 pt-3">
  <div class="container-fluid">
    <div class="row">
      <!-- <span class="fa-stack fa-2x pull-left m-r-sm">
        <i class="fa fa-circle fa-stack-2x text-info"></i>
        <i class="fa fa-male fa-stack-1x text-white"></i>
      </span> -->
      <div class="col-sm-12">
        <h4 style="color: black;"><b>EMPLOYEE INFO</b></h4>
      </div>
      <div class="mb-3" style="display: flex;justify-content: end;">
        <button type="button" class="btn btn-primary addNew">
          Add New
        </button>
        <!-- jddd -->
      </div>
  </div>
  <div class="row employeeAdd">
  </div>
  </div>
  <!-- Update Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>Employee Profile</b></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-sm-6">
              <label for="name">Name</label>
              <input type="text" class="form-control employeeName" placeholder="name" id="name" required>
              <span class="nameError error"></span>
            </div>
            <div class="col-sm-6">
              <label for="text">Image</label>
              <input type="file" class="form-control employeeImage" placeholder="image" id="image" required>
              <span class="imageError error"></span>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <h5>Description</h5>
                <textarea class="employeeDesciption" id="Description" rows="5" cols="50"></textarea>
                <span class="desciptionError error"></span>
              </div>
            </div>

            <!-- addEmployeeprofile use for button -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary addEmployeeProfile" data-id="">Save</button>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
  <!-- Delete -->
  <div class="text-end mb-5">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="text-align: left;">
            are sure delete this
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cencel</button>
            <button type="button" id="removeBtn" class="btn btn-primary" data-id="">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<!-- Delete -->

<?php include ('footer.php') ?>