


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
            background-image: linear-gradient(#ffffb3,#ff6600);
            height: 925px;
        }
    
        h1
        {
            text-align: center;
            color:black;
            text-shadow: 2px 2px white;
            font-size: 70px;
        }
        form
        {   background-image: linear-gradient(#669900,#ffff66);
          
            padding: 10px 10px;
            width: 680px;
            margin-left:31%;
            border:2px solid black;
            border-radius: 10px;
            box-shadow: 2px 2px white;
        }
        select
        {
            width: 150px;
            
        }
        #l
        {
            font-size: 25px;
            margin-left:7%;
        }
        #c
        {
            font-size: 35px;
            margin-left:7%;
        }

       @media screen and (min-device-width: 694px) and (max-device-width: 999px){
     body
        {
            background-image: linear-gradient(#ffffb3,#ff6600);
            height: 925px;
        }
    
        h1
        {
            text-align: center;
            color:black;
            text-shadow: 2px 2px white;
            font-size: 60px;
        }
         h2{
            font-size:35px;
        }
        form
        {   background-image: linear-gradient(#669900,#ffff66);
          
            padding: 10px 10px;
            width: 460px;
            margin-left:23%;
            border:2px solid black;
            border-radius: 10px;
            box-shadow: 2px 2px white;
        }
        #l
        {
            font-size: 20px;
            margin-left:3%;
        }
        #c
        {
            font-size: 30px;
            margin-left:7%;
        }



        }  

        @media screen and (min-device-width: 300px) and (max-device-width: 693px){
                 body
        {
            background-image: linear-gradient(#ffffb3,#ff6600);
            height: 925px;
        }
    
        h1
        {
            text-align: center;
            color:black;
            text-shadow: 2px 2px white;
            font-size: 40px;
        }
        h2{
            font-size:32px;
        }
        form
        {   background-image: linear-gradient(#669900,#ffff66);
          
            padding: 10px 10px;
            width: 290px;
            margin-left:6%;
            border:2px solid black;
            border-radius: 10px;
            box-shadow: 2px 2px white;
        }
        #l
        {
            font-size: 16px;
            margin-left:3%;
        }
        #c
        {
            font-size: 23px;
            margin-left:7%;
        }

        }


    </style>
    <?php

        //Create Connection
        include 'include.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $roll = $_POST['roll'];
            $name = $_POST['name'];
            $class = $_POST['class'];
            $bng = $_POST['bng'];
            $eng = $_POST['eng'];
            $sci = $_POST['sci'];
            if (!$con){
                die("Sorry we failed to connect: ". mysqli_connect_error());
            }
            else{ 
              // Submit these to a database
              // Sql query to be executed 
              $sql = "INSERT INTO `umarks` (`roll`, `name`, `class`, `bng`, `eng`, `sci`) VALUES ('$roll','$name','$class','$bng','$eng','$sci')";
              $result = mysqli_query($con, $sql);
       
              if($result){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
              }
              else{
                  // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>';
              }
      
            }}
      
      
 
      
    ?>
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
    echo '<h2 style = "color:black;font-size: 40px;" >welcome :'.' '. $_SESSION['username'].'</h2>';
}
?>
</center>
        
    
    <div class = "container">
    <form action = "student_marks.php" method = "POST">
    <hr width = "full" size = "3" color = "red">
        <div>
        <caption> <strong  id="c"> <u> Basic Info : </u> </strong></caption>
        <br> <br>
            <label for = "roll" id="l"> Roll :  </label><input type="text" id="fname" name="roll" size="30">
        </div>
        <br>
        <div>
            <label for = "name" id="l"> Name :  </label> <input type="text" id="fname" name="name" size="30">
        </div>
        <div>
            <br>
            <label for = "class" id="l"> Class:  </label>  <input type="text" id="fname" name="class" size="30">
            
          <!--   <select name = "class">
                <option readonly></option>
                <option>6A</option>
                <option>6B</option>
            </select>  -->
        </div>
        <br>
        <hr width = "full" size = "3" color = "red">
            <caption > <strong  id="c"> <u> Subjects : </u> </strong></caption>
            <br> <br>
            <label for = "name" id="l"> Bengali :  </label> <input type = "number" name = "bng" max = "100" min = "0" required>
            <label for = "name" id="l"> English :  </label> <input type = "number" name = "eng" max = "100" min = "0" required>
            <label for = "name" id="l"> Science :  </label> <input type = "number" name = "sci" max = "100" min = "0" required>
        <center>
            <br><br>
                 <button type = "submit" style = "background-color:#32CD32; padding:8px 20px;  border-radius: 10px;font-size: 17px; " name = "submit"> Submit </button> 
                 <button type = "reset" style = "background-color:red;padding:8px 20px; border-radius: 10px;  margin-left:2%;font-size: 17px;" name = "reset"> Reset </button>
                 <a href = "admin_edit.php" style = "color:black;font-size: 17px;margin-left:2%;margin-right:2%;background-color:#32CD32;padding:8px 20px;border-radius: 10px;border: 1px solid black; " >Back </a>     
                 
      </center>
     
        </div>
        
        
        
    </form>
    
    
    
    </div>
</body>
</html>