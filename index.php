<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS Home page</title>
</head>
<body>
    
    <?php
include("header.php");
 ?>

<div style="margin-top: 50px"></div>

 <div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 mx-1 shadow">
                <img src="img/info.png" style="width: 100%; height: 190px;">

                <h5 class="text-center">click on the button for more information</h5>

                <a href="https://www.icliniq.com/ask-a-doctor-online">
                    <button class="btn btn-success my-3" style="margin-left: 20%;">More Information</button> 
                </a>

            </div>
            <div class="col-md-4 mx-1 shadow">
                <img src="img/patient.jpg" style="width: 100%;">

                <h5 class="text-center">Create Account so that we can take good care of you.</h5>

                <a href="account.php">
                    <button class="btn btn-success my-3" style="margin-left: 30%;">Create Account!!!</button>
                    
                </a>

            </div>
            <div class="col-md-4 mx-1 shadow">
                <img src="img/doctor.jpg" style="width: 100%;">

                <h5 class="text-center">We are employing for doctors</h5>

                <a href="apply.php">
                    <button class="btn btn-success my-3" style="margin-left: 30%;">Apply Now!!!</button>   
                </a>

            </div>
        </div>
    </div>
</div>

    
</body>
</html>