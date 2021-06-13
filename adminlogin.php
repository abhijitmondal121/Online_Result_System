
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'include.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        header("location:admin_edit.php");
        //echo "welcome";
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title> Sample Wipro </title>
    <style>
        body
        {
            background-image: linear-gradient(#ff8000,#ff00ff);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color:blue;
            text-shadow: 2px 2px white;
            font-size: 70px;
        }
        form
        {   margin-top:3%;
            background-image: linear-gradient(white,#00cc00);
            padding: 20px 30px;
            width: 450px;
            margin-left:36%;
            border:2px solid black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }

        
        .block {
                display: inline-block;
                width: 20%;
                border: none;
                background-color: black;
                color: white;
                padding:8px 2px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
                margin-left:2%;
                border-radius: 15px;
                }

         .block:hover {
                background-color:white;
                color: black;
                }
                
               #c {
            font-size: 30px;
        }

        @media screen and (min-device-width: 694px) and (max-device-width: 999px){
             body
        {
            background-image: linear-gradient(#ff8000,#ff00ff);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color:blue;
            text-shadow: 2px 2px white;
            font-size: 60px;
        }
        form
        {   margin-top:3%;
            background-image: linear-gradient(white,#00cc00);
            padding: 20px 30px;
            width: 350px;
            margin-left:26%;
            border:2px solid black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }

        
        .block {
                display: inline-block;
                width: 20%;
                border: none;
                background-color: black;
                color: white;
                padding:8px 2px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
                margin-left:2%;
                border-radius: 15px;
                }

         .block:hover {
                background-color:white;
                color: black;
                }
                
               #c {
                font-size: 28px;
        }

        }  

        @media screen and (min-device-width: 450px) and (max-device-width: 693px){

        body
        {
            background-image: linear-gradient(#ff8000,#ff00ff);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color:blue;
            text-shadow: 2px 2px white;
            font-size: 45px;
        }
        form
        {   margin-top:3%;
            background-image: linear-gradient(white,#00cc00);
            padding: 20px 30px;
            width: 270px;
            margin-left:20%;
            border:2px solid black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }

        
        .block {
                display: inline-block;
                width: 20%;
                border: none;
                background-color: black;
                color: white;
                padding:8px 2px;
                font-size: 14px;
                cursor: pointer;
                text-align: center;
                margin-left:2%;
                border-radius: 15px;
                }

         .block:hover {
                background-color:white;
                color: black;
                }
                
               #c {
                font-size: 17px;
        }

        }

        @media screen and (min-device-width: 280px) and (max-device-width: 449px){

        body
        {
            background-image: linear-gradient(#ff8000,#ff00ff);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color:blue;
            text-shadow: 2px 2px white;
            font-size: 35px;
        }
        form
        {   margin-top:3%;
            background-image: linear-gradient(white,#00cc00);
            padding: 20px 30px;
            width: 220px;
            margin-left:13%;
            border:2px solid black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }

        
        .block {
                display: inline-block;
                width: 20%;
                border: none;
                background-color: black;
                color: white;
                padding:8px 2px;
                font-size: 14px;
                cursor: pointer;
                text-align: center;
                margin-left:2%;
                border-radius: 15px;
                }

         .block:hover {
                background-color:white;
                color: black;
                }
                
               #c {
                font-size: 14px;
        }

        }

    </style>
</head>
<body>
<?php
    if($login){
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>


<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
    <h1> Anybody Public High School  </h1>
    <br>
    <div class="container my-4">
     <form action="/Online_Result_System/adminlogin.php" method="POST">
        <div class="form-group">
            <label for="username" id="c">Username:</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
         </div><br>
        <div class="form-group">
            <label for="password" id="c">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       <br>
         <center>
        <button type="submit" class="block">Login</button>
        <a href = "index.php" class="block" >Home </a>   <br>  
     </center>
     </form>
    </div>

    
</body>
</html>
