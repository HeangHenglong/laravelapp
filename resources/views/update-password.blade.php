<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My Contact | Login</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('bootstrap-icons/font/bootstrap-icons.css')}}" >
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" >
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="{{'welcome'}}">
                <strong>Contact</strong> App
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
                            <a class="dropdown-item" href="{{'profile'}}">Settings</a>
                            <a class="dropdown-item" href="{{'login'}}">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <div class="col-md-4 m-auto mt-5">
        <div class="shadow-sm">
            <h1 class="border-bottom p-4">Reset Password</h1>

            <div class="px-4 py-4">

                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" />
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" />
                    </div>
                    <div class="mb-3">
                        <a href="{{'verify-email'}}"><button type="submit" class="btn btn-block btn-primary">Reset Password</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>
