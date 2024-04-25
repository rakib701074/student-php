<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="bootstrap/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="bootstrap/css/style.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="bootstrap/js/jquery-3.5.1.js"></script>
    <script src="bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="bootstrap/js/script.js"></script>
    <script src="js/employee.js"></script>
    <title>Frontendfunn - Bootstrap 5 Admin Dashboard Template</title>
    <style>
        .container .content {
            position: relative;
            margin-top: 10vh;
            min-height: 90vh;
        }

        .container .content .cards {
            padding: 20px 15px 30px 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .container .icon-case img {
            width: 30%;
            position: relative;
            left: 35%;
            box-shadow: 30p red;

        }

        .container .content .cards .card {
            width: 300px;
            height: 260px;
            background: white;
            margin: 20px 20px 30px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            border: 2px solid white;
            /* border-radius: 20px; */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.23);
        }

        .container .content .cards .card:hover {
            background-color: yellow;
            border: 2px solid bisque;
        }

        .container .box {
            color: black;
            font-size: 20px;
            font-weight: 800;

        }

        .container .icon-case h2 {
            color: red;
            text-align: center;
        }
    </style>


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
                aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Employees Info</a>
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="bi bi-person-fill bg-white"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">
                        <i class="bi bi-person-check-fill"></i>
                        Profile</a>
                    <hr class="dropdown-divider bg-dark" />
                </li>
                <li><a class="dropdown-item" href="#">
                        <i class="bi bi-house-lock-fill"></i>
                        Change Password</a>
                    <hr class="dropdown-divider bg-dark" />
                </li>

                <li>
                    <a class="dropdown-item" href="login/index.html">
                        <i class="bi bi-box-arrow-right"></i>
                        Log out</a>
                </li>
            </ul>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start sidebar-nav bg-dark" tabindex="-1" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3">
                            CORE
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-grid-fill"></i></span>
                            <span><b>DASHBOARD</b></span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="dropdown-divider bg-light" />
                    </li>
                    <li>
                        <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                            Interface
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                            <span>Employee Info</span>
                            <span class="ms-auto">
                                <span class="right-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </span>
                        </a>
                        <div class="collapse" id="layouts">
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-grid-fill"></i></span>
                                        <span>Dashboard</span>
                                    </a>
                                    <a href="#" class="nav-link px-3">
                                        <span class="me-2"><i class="bi bi-person-check-fill"></i>
                                        </span>
                                        <span>Employees</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
        <div class="container-fluid">
            <div0 class="row">
                <div class="col-sm-12">
                    <h4 style="color: black;"><b>EMPLOYEE INFO</b></h4>
                </div>
                <div class="mb-3" style="display: flex;justify-content: end;">

                    <button type="button" class="btn btn-primary addNew">
                        Add New
                    </button>
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
                                <input type="text" class="form-control employeeName" placeholder="name" id="name"
                                    required>
                                <span class="nameError error"></span>
                            </div>
                            <div class="col-sm-6">
                                <label for="text">Image</label>
                                <input type="file" class="form-control employeeImage" placeholder="image" id="image"
                                    required>
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
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
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
        <div class="container">
            <div class="content">
                <div class="cards">
                    <div class="card">
                        <div class="box">
                            <h3>Rakesh</h2>
                        </div>
                        <div class="icon-case">
                            <img src="stroage/user.png" alt="">
                            <h2>Engineer</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h3>Mohit</h3>

                        </div>
                        <div class="icon-case">
                            <img src="stroage/user.png" alt="">
                            <h2>Developer</h2>
                        </div>
                    </div>
                    <div class="card">
                        <div class="box">
                            <h3>Irfan</h2>
                        </div>
                        <div class="icon-case">
                            <img src="stroage/user.png" alt="">
                            <h2>Mistri Sakti ka</h3>
                        </div>
                    </div>
                </div>


    </main>
</body>

</html>