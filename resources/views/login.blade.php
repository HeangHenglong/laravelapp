<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>My Contact | Login</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" >
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" >
    </head>
    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand text-uppercase" href="{{'welcome'}}">
                    <strong><i class="bi bi-person-lines-fill me-1"></i>Contact</strong> App
                  </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- /.navbar-header -->
                <div class="collapse navbar-collapse" id="navbar-toggler">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{'index'}}" class="nav-link">Companies</a></li>
                        <li class="nav-item active"><a href="{{'form'}}" class="nav-link">Contacts</a></li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mr-2"><a href="{{'login'}}" class="btn btn-outline-secondary">Login</a></li>
                        <li class="nav-item"><a href="{{'register'}}" class="btn btn-outline-primary">Register</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{'index'}}" id="navbarDropdownMenuLink" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                John Doe
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="profile.html">Settings</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="col-md-4 m-auto mt-5">
            <div class="shadow-sm">
                <h1 class="border-bottom p-4">Login</h1>

                <div class="px-4 pt-4">

                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" />
                        </div>
                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label text-black-50" for="customCheck1">Remember me</label>
                            </div>
                            <a href="{{'request-reset-password'}}">Forget your password?</a>
                        </div>
                        <div class="mt-4 d-grid">
                            <a href="{{'welcome'}}"><button type="submit" class="btn btn-block btn-primary">Login</button></a>
                            <div class="text-center py-4 text-muted">
                                Don't have account?
                                <a href="{{'register'}}"
                                    class="text-muted font-weight-bold text-decoration-none">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="asset/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
