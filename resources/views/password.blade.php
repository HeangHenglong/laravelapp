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
                            <a class="dropdown-item" href="profile.html">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- content -->
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            Settings
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="{{'profile'}}" class="list-group-item list-group-item-action">Profile</span></a>
                            <a href="{{'password'}}" class="list-group-item list-group-item-action active">Password</span></a>
                            <a href="{{'update-password'}}" class="list-group-item list-group-item-action">Import & Export</span></a>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header card-title">
                            <strong>Change Password</strong>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="current-password" class="col-md-4 col-form-label">Current Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="current_password"
                                        id="current-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password-confirmation" class="col-md-4 col-form-label">Password
                                    Confirmation</label>
                                <div class="col-md-8">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        id="password-confirmation">
                                </div>
                            </div>
                            <div class="form-group row border-top pt-3 mb-0">
                                <div class="col-md-4"></div>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-success">Update Password</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="asset/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#add-new-group").hide();
        $('#add-group-btn').click(function () {
            $("#add-new-group").slideToggle(function () {
                $('#new_group').focus();
            });
            return false;
        });
    </script>
</body>

</html>
