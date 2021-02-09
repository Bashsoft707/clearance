<?php
require '../config/conn.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    if ($password != $c_password) {
        $err = "Password do not match";
    }else{
        $insert = mysqli_query($conn, "INSERT into admin(username, password) VALUES('$username','$password')");
        if ($insert) {
            die('successful');
        }else{
            die('unsuccessful');        
        }
        
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="../plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="custom-css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <style type="text/css">
    body{
        background-image: url('../img/a.jpg');
    }
        .register{
            width: 50%;
            margin: 40px auto;
            padding: 10px;
    }
        .reg{
            background: ;padding: 20px; margin: auto;
            color: white;
            width: 100%;
            text-align: center;
    }
        .register input, .register select{
            margin: 10px auto;
    }
            button{
            margin: auto;
            width: 90%
    }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="container card register">
            <div class="card reg bg-primary" style=" "><h4>ADMIN REGISTRATION FORM</h4> 
            </div>
            <div class="row">
                <div class="col-md-12 first-col">
                    <input type="text" required="" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="col-md-12 second-col">
                 <input type="password" required="" name="password" placeholder="Password" class="form-control">   
                </div>
                <div class="col-md-12 second-col">
                 <input type="password" required="" name="c_password" placeholder="Confirm Password" class="form-control"> 
                 <p style="color: red; font-size: 13px; text-align: center;"> 
                    <?php echo $err; ?> </p>  
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        function validate_select(value) {
            var option_parent = document.getElementsByClassName('option_parent')
            if(value == 'placeholder' ){
                option_parent.style.border='1px solid red'

            }else{
                option_parent.style.border='1px solid #ccc'
            }
        }
    </script>
</body>
</html>