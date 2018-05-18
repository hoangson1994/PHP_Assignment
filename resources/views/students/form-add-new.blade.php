<!doctype html>
<html lang="en">
<head>
    <title>ADD STUDENT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

    <div class="container">
        <div class="page-header">
            <img src="https://1.bp.blogspot.com/-yrypDURFLrk/Wl2Zdy5oGoI/AAAAAAAABQ8/gT7v-2JNd-M6tDZwTXsQ8zoqO5GOj6xkgCLcBGAs/s400/Altmetric_rgb.png" class="img-circle" alt="">
        </div>
    </div>


    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">StudentM</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">List Student</a></li>
                <li><a href="/student">Add Student</a></li>

            </ul>
        </div>
    </nav>

    <div class="row centered-form">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 page-header text-center">
            <h2>ADD STUDENT</h2>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row centered-form">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> <small></small></h3>
                </div>
                <div class="panel-body">
                    <form action="/student" method="post" role="form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="full_name" id="first_name" class="form-control input-sm" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="roll_number" id="last_name" class="form-control input-sm" placeholder="RollNumber">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="password" class="form-control input-sm" placeholder="Phone">
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Save" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>