<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--    CSS only-->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/custom.css">
    <!--Javascript only-->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <title>Home Page</title>
</head>
<body >
<div class="shadow p-3 mb-5  rounded" >
    <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-fluid ">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end " id="navbarScroll" style="padding-top: 8px;">

                <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sign In</a>

                    </li>

                </ul>

            </div>
        </div>
    </nav>
</div>
<!--==============================================================-->

<div class="container-fluid">

    <div >

    <div class="tab-content" id="pills-tabContent">
<!--        This is the home page of the website-->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">hello</div>
<!--This is the login page of the website        -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" >
            <div class="d-flex justify-content-center w-100  p-3"  >
                    <div class="login w-25  p-3 shadow-lg p-3 mb-5 rounded h-100 d-inline-block">
<!--                    <div class="mb-3 alert alert-success" id="alert" >-->
<!---->
<!---->
<!--                    </div>-->
                    <form>
                        <div class="mb-3 ">

                            <h3>Login</h3>

                        </div>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="InputEmail1OrUser" placeholder="Enter your username">

                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                    </div>
                    <div class="mb-3 ">

                        <a href="" ><label class="form-label"  style="fon"> <u>Forget password</u> </label></a>
                    </div>
                    <div class="col text-center"><button type="submit" class="btn btn-primary" >Submit</button></div>
                    </form>
                </div>

        </div>
<!-- This is the register page of the website       -->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
    </div>
</div></div>
</body>
</html>
