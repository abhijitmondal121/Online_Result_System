<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'include.php';
        $desc = $_POST['name'];
      

              // Submit these to a database
              // Sql query to be executed 
              $sql = "INSERT INTO `notice` (`desc`) VALUES ( '$desc');";
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
            background-image: linear-gradient(#cc6600, #ccffff);
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
        {
            background-image: linear-gradient(#669900,#ffff66);
            padding: 10px 10px;
            width: 580px;
           
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
        .block {
                display: inline-block;
                margin-top:80px;
               
                width:300px;
                background-color:#32CD32;
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

         #name1{
            height:80px;width:450px;border-radius: 8px;
         }

        @media screen and (min-device-width: 300px) and (max-device-width: 617px){
       body
        {
            background-image: linear-gradient(#cc6600, #ccffff);
            height: 925px;
        }
    
        h1
        {
            text-align: center;
            color:black;
            text-shadow: 2px 2px white;
            font-size: 40px;
        }
       
        form
        {
            background-image: linear-gradient(#669900,#ffff66);
            padding: 10px 10px;
            width: 310px;
            margin-left: 0px;
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
        .block {
                display: inline-block;
                margin-top:80px;
               
                width:300px;
                background-color:#32CD32;
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

         #name1{
            height:80px;width:280px;border-radius: 8px;
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
</center>
        
<center>

<div class="container ">
     <form action="/Online_Result_System/admin_notice.php" method="POST">

       
            <label for="name" style = "font-size:27px;margin-right:2%;">Post a Notice :</label>
            <input type="text" class="form-control" id="name1" name="name"size="50"  aria-describedby="emailHelp">
        
         <br><br>
        <button type="submit" class="bloc"style = " background-color:#32CD32; padding:7px 15px;border-radius: 10px;font-size: 17px;">Submit</button>
        <a href = "admin_edit.php" style = "color:black;font-weight:bold;font-size: 17px;margin-left:2%;margin-right:2%; background-color:red;padding:7px 25px;border-radius: 10px;border: 1px solid black; " >Back </a>
  
     </form>
    </div>





   
  
  
</center>

</body>
</html>