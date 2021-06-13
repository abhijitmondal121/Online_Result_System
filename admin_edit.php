


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
            background-image: linear-gradient(#ff4dff, black);
            height: 925px;
        }
    
        h1
        {
            text-align: center;
            color:black;
            text-shadow: 2px 2px white;
            font-size: 70px;
        }
         h2
        {
            color:black;font-size: 40px;text-shadow: 1px 1px white;
        }
 
        .block {
                display: inline-block;
                margin-top:40px;
               
                width:300px;
                background-color:#00e600;
                color: black;
                border: none;
                padding:45px 12px;
                font-size: 46px;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                }

        .block:hover {
            background-color: black;
                color: white;
                }

       @media screen and (min-device-width: 294px) and (max-device-width: 999px){
          body
        {
            background-image: linear-gradient(#ff4dff, black);
            height: 925px;
        }
    
        h1
        {
            text-align: center;
            color:black;
            text-shadow: 2px 2px white;
            font-size: 50px;
        }
         h2
        {
            color:black;font-size: 30px;text-shadow: 1px 1px white;
        }
 
        .block {
                display: inline-block;
                margin-top:40px;
               
                width:150px;
                background-color:#00e600;
                color: black;
                border: none;
                padding:35px 2px;
                font-size: 30px;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                }

        .block:hover {
            background-color: black;
                color: white;
                }



        }  

    </style>
</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
    <h1> Anybody Public High School  </h1>
<center>
<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
    echo '<h2 style = "color:black;font-size: 40px;text-shadow: 1px 1px white;" >welcome :'.' '. $_SESSION['username'].'</h2>';
}
?>

  <a class="block" href="/Online_Result_System/student_marks.php" >Student-Marks</a>
  <a class="block" href="/Online_Result_System/admin_notice.php" style = "margin-left:3%;"  >Notice</a>
 

  <br><br><br><br><br>
  <a href = "index.php" style = "color: #ffff99;font-weight:bold;font-size: 30px; " >Home </a> 
  <a href = "adminlogin.php" style = "color: white;font-weight:bold;font-size: 30px;margin-left:3%; " >Admin-login </a>  
  
  <a href = "adminlogin.php" style = "color: #ffff99;font-weight:bold;font-size: 30px;margin-left:3%;margin-right:2%  " >Back </a>  
   
  
  
</center>

</body>
</html>
