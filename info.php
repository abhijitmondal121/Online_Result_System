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
            background-image: linear-gradient(#ffff99,#ff6600);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color: black;
            text-shadow: 2px 2px white;
            font-size: 70px;
        }
 
   
        .bloc{
            background-color:black; padding:15px 46px;  border-radius: 40px; color:white;
        }



        @media screen and (min-device-width: 280px) and (max-device-width: 514px){
                 body
        {
            background-image: linear-gradient(#ffff99,#ff6600);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color: black;
            text-shadow: 2px 2px white;
            font-size: 40px;
        }
        h2{
            font-size: 20px;
        }
 
 
        .bloc{
            background-color:black; padding:10px 30px;  border-radius: 40px; color:white;
        }


        }  

 
    </style>
 

</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   

    <h1> Anybody Public High School  </h1>
    <?php
      session_start();
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
      echo '<h2 >NAME :'.' '. $_SESSION['name'].'</h2>';
      echo '<h2 >ROLL :'.' '. $_SESSION['roll'].'</h2>';
      echo '<h2 >CLASS :'.' '. $_SESSION['class'].'</h2>';
}
?>
<br><br><br>
<a class="bloc" href="/Online_Result_System/search.php"  >Back</a>
</center>

</body>
</html>
