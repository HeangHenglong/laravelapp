<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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
    <main class="py-5">
        <div class="container">
            <h1 class="h5 mb-3">
                Welcome
                <small class="text-muted">John</small>
            </h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="mb-0"><strong>Thanks for signing up!</strong> Before getting started, please
                                verify your email address by clicking on the link we just emailed to you.</p>
                            <p class="mb-0">If you didn't receve the email, we will gladly send you another.</p>
                            <form>
                                <a href="https://mail.google.com/mail/u/0/#inbox"><button class="btn btn-secondary mt-3">Resend email verification</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
</body>

</html>
