
<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'include.php';
    $roll = $_POST["roll"];
    $name = $_POST["name"];
    $class = $_POST["class"]; 
    
     
    $sql = "SELECT * FROM `umarks` WHERE `roll`='$roll'AND `name`='$name' AND `class`='$class'";
    
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['roll'] = $roll;
        $_SESSION['name'] = $name;
        $_SESSION['class'] = $class;
        header("location:search.php");
        
        
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
            background-image: linear-gradient( #ffffcc,#00ff00);
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
        {   margin-top:5%;
            background-color:#994d00;
            padding: 20px 10px;
            width: 450px;
            margin-left:36%;
            border:5px solid  black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }
        
        .form-group{
            font-weight:bold;
            margin-left:5%;
 			 font-size:30px;
 			 
 			 
        }
        
        .block {
                display:inline-block;
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


        @media screen and (min-device-width: 694px) and (max-device-width: 999px){
             body
        {
            background-image: linear-gradient( #ffffcc,#00ff00);
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
        {   margin-top:5%;
            background-color:#994d00;
            padding: 20px 10px;
            width: 350px;
            margin-left:25%;
            border:5px solid  black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }
        
        .form-group{
            font-weight:bold;
            margin-left:5%;
             font-size:27px;
             
             
        }
        
        .block {
                display:inline-block;
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



        }  

        @media screen and (min-device-width: 450px) and (max-device-width: 693px){
                         body
        {
            background-image: linear-gradient( #ffffcc,#00ff00);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color:blue;
            text-shadow: 2px 2px white;
            font-size: 50px;
        }
        form
        {   margin-top:5%;
            background-color:#994d00;
            padding: 20px 10px;
            width: 280px;
            margin-left:20%;
            border:5px solid  black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }
        
        .form-group{
            font-weight:bold;
            margin-left:5%;
             font-size:24px;
             
             
        }
        
        .block {
                display:inline-block;
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
        .l{
            font-size: 18px;
        }

        }

        @media screen and (min-device-width: 280px) and (max-device-width: 449px){
                                     body
        {
            background-image: linear-gradient( #ffffcc,#00ff00);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color:blue;
            text-shadow: 2px 2px white;
            font-size: 40px;
        }
        form
        {   margin-top:5%;
            background-color:#994d00;
            padding: 20px 10px;
            width: 250px;
            margin-left:10%;
            border:5px solid  black;
            border-radius: 15px;
        }
        select
        {
            width: 150px;
        }
        
        .form-group{
            font-weight:bold;
            margin-left:5%;
             font-size:24px;
             
             
        }
        
        .block {
                display:inline-block;
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
        .l{
            font-size: 16px;
        }

        }
    </style>
</head>
<body>
<?php
    if($login){
    echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are successfully login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong>you are not login.please put all the value correctfully!
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
    <div class="container my-2">
     <form action="/Online_Result_System/studentlogin.php" method="POST">
     <div class="form-group">
            <label for="roll" class="l">Roll :</label>
            <input type="text" class="form-control" id="roll" name="roll" size="29" aria-describedby="emailHelp">
         </div><br>
        <div class="form-group">
            <label for="name" class="l">Username :</label>
            <input type="text" class="form-control" id="name" name="name"size="29" aria-describedby="emailHelp">
         </div><br>
        <div class="form-group">
            <label for="class" class="l">Class :</label>
            <input type="password" class="form-control" id="class" size="29" name="class">
        </div>
       <br>
         <br>
         <center>
        <button type="submit" class="block">Login</button>
        <a href = "index.php" class="block" >Home </a>   <br> 
        </center>
     </form>
    </div>

    
</body>
</html>