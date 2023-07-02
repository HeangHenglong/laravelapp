<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>My Contact</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('bootstrap-icons/font/bootstrap-icons.css')}}" >
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" >
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <a class="navbar-brand text-uppercase" href="{{'welcome'}}">
          <strong><i class="bi bi-person-lines-fill me-1"></i>Contact</strong> App
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{'index'}}">Company</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{'form'}}">Contact</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-1"><a href="{{'login'}}" class="btn btn-outline-primary"><i class="bi bi-box-arrow-in-right me-1"></i>Login</a></li>
              <li class="nav-item mx-1"><a href="{{'register'}}" class="btn btn-outline-primary"><i class="bi bi-person-plus-fill me-1"></i></i>Register</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{'index'}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  John Doe
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{'profile'}}">Settings</a></li>
                  <li><a class="dropdown-item" href="{{'login'}}">Logout</a></li>
                </ul>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </nav>
    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title m-0">
                  <div class="d-flex justify-content-between">
                    <h4 class="m-0">All Contacts</h4>
                    <div class="m-0">
                      <a href="{{'form'}}" class="btn btn-success"><i class="bi bi-plus-square"></i> Add New</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        <select class="form-select">
                          <option value="" selected>All Companies</option>
                          <option value="1">Company One</option>
                          <option value="2">Company Two</option>
                          <option value="3">Company Three</option>
                        </select>
                      </div>
                      <div class="col">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-outline-secondary mx-0" type="button">
                              <i class="bi bi-arrow-clockwise"></i>
                            </button>
                            <button class="btn btn-outline-secondary" type="button" id="button">Search</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>John Doe</td>
                        <td>Company One</td>
                        <td>johndoe@example.com</td>
                        <td>123-456-7890</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Jane Doe</td>
                        <td>Company Two</td>
                        <td>janedoe@example.com</td>
                        <td>234-567-8901</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>Bob Smith</td>
                        <td>Company Three</td>
                        <td>bobsmith@example.com</td>
                        <td>345-678-9012</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- footer -->
    <footer class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            &copy; 2023 My Contact App. All rights reserved.
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript -->
    <script src="asset/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
