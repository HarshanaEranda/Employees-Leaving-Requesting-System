
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- CSS only -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="../bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/New.js"></script>
</head>
<style>
    .error{
        color : #FF0000;
    }
    h1{

        text-align: center;
    }
    label{
        font-weight: bold;
    }
    ::placeholder{
        font-weight: bold;
    }
</style>
<body>


<div class="container" style="padding-top: 100px; padding-bottom: 50px;">
    <h1 >Create Your Account</h1>
    <form action="" method="">
        <div class="mb-3">
            <label for="FullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="FullName" aria-describedby="Full name" placeholder="Enter your full name" name="name">
            <span class="error"></span>
        </div>
        <div class="mb-3">
            <label for="UserName" class="form-label">Username</label>
            <input type="text" class="form-control" id="UserName" aria-describedby="User name" placeholder="Enter your user name" name="uname">

        </div>
        <div class="mb-3">
       <label class="form-label"> Gender </label><br>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
            <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Resident Address</label>
            <input type="text" class="form-control" id="address" aria-describedby="Address" placeholder="Enter your resident address" name="address">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email address" name="email">
            <span class="error"></span>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="MobileNumber" class="form-label">Mobile Number</label>
            <input type="number" class="form-control" id="MobileNumber" aria-describedby="Mobile number" placeholder="Enter your mobile number" name="number">
            <span class="error"></span>
        </div>
        <div class="mb-3">
            <label for="Birthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="Birthday" aria-describedby="Date of Birthday" placeholder="Enter your mobile number" name="birthday">

        </div>
        <div class="mb-3">
            <label for=" Password1" class="form-label">Password</label>
            <input type="password" class="form-control" id="Password1" placeholder="Enter your password" name="passwordn1" onkeyup="valid()">
<!--            <meter min="1" max="100" value="0" low="0" high="0" id="grade"></meter>-->
            <span id="msg"></span>

        </div>
                <div class="mb-3">
                    <label for="Password2" class="form-label">Conform Password</label>
                    <input type="password" class="form-control" id="Password2" placeholder="Enter your password again" name="passwordn2" onkeyup="ConfirmPassword()">
                    <span id="msg2"></span>
                </div>

        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
    </form></div>
</body></html>

