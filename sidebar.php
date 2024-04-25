<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
      aria-controls="offcanvasExample">
      <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
    </button>
    <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">Employees Info</a>
    <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <a class="dropdown-item" href="login/index.php">
          <i class="bi bi-box-arrow-right"></i>
          Log out</a>
      </li>
    </ul>
    </li>
    </ul>
  </div>
  </div>
</nav>
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
                <a href="table.php" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-grid-fill"></i></span>
                  <span>Employees</span>
                </a>
                <a href="card.php" class="nav-link px-3">
                  <span class="me-2"><i class="bi bi-person-check-fill"></i>
                  </span>
                  <span>Employe Card</span>
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
