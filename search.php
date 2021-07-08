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
            color: black;
            text-shadow: 2px 2px white;
            font-size: 70px;
        }
        p
        {
            text-align: center;
            color : red;
            font-weight: 900;
            text-shadow: 2px 2px white;
        }

        form
        {   
            margin-top:2%;
            background-color:	 #88cc00;
            padding: 30px 10px;
            width: 450px;
            margin-left:37%;
            border:2px solid black;
            box-shadow: 2px 5px white;
            border-radius: 5px;
        }
        select
        {
            width: 150px;
        }
        #l
        {
            font-size: 20px;
        }
        #c
        {
            font-size: 30px;
        }
        .b{
            padding:10px 16px;
             width:300px;
             
             font-size: 50px;
             border-radius:10px;
        }
        .block {
                display: inline-block;
                margin-top:80px;
               
                width:300px;
                background-color:#66cc00;
                color: black;
                border: none;
                padding:55px 2px;
                font-size: 46px;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                }

         .block:hover {
            background-color: black;
                color: white;
                }


        @media screen and (min-device-width: 694px) and (max-device-width: 999px){
                body
        {
            background-image: linear-gradient(#ff4dff, black);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color: black;
            text-shadow: 2px 2px white;
            font-size: 60px;
        }

        select
        {
            width: 150px;
        }
        #l
        {
            font-size: 20px;
        }
        #c
        {
            font-size: 30px;
        }
        .b{
            padding:10px 16px;
             width:300px;
             
             font-size: 50px;
             border-radius:10px;
        }
        .block {
                display: inline-block;
                margin-top:80px;
               
                width:200px;
                background-color:#66cc00;
                color: black;
                border: none;
                padding:55px 2px;
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

        @media screen and (min-device-width: 462px) and (max-device-width: 693px){
                            body
        {
            background-image: linear-gradient(#ff4dff, black);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color: black;
            text-shadow: 2px 2px white;
            font-size: 50px;
        }

        #l
        {
            font-size: 20px;
        }
        #c
        {
            font-size: 30px;
        }
        .b{
            padding:10px 16px;
             width:250px;
             
             font-size: 40px;
             border-radius:10px;
        }
        .block {
                display: inline-block;
                margin-top:80px;
               
                width:130px;
                background-color:#66cc00;
                color: black;
                border: none;
                padding:45px 2px;
                font-size: 20px;
                cursor: pointer;
                text-align: center;
                border-radius: 15px;
                }

         .block:hover {
            background-color: black;
                color: white;
                }

        }

        @media screen and (min-device-width: 280px) and (max-device-width: 461px){
            {
            background-image: linear-gradient(#ff4dff, black);
            height: 925px;
        }
        h1
        {
            text-align: center;
            color: black;
            text-shadow: 2px 2px white;
            font-size: 40px;
        }

        #l
        {
            font-size: 20px;
        }
        #c
        {
            font-size: 30px;
        }
        .b{
            padding:10px 16px;
             width:250px;
             
             font-size: 40px;
             border-radius:10px;
        }
        .block {
                display: inline-block;
                margin-top:80px;
               
                width:90px;
                background-color:#66cc00;
                color: black;
                border: none;
                padding:30px 0px;
                font-size: 17px;
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


    <?php
        if (isset($_REQUEST['submit']))
        {
            
            //Basic Details
           // $roll = htmlentities($_REQUEST['roll']);
           // $class = htmlentities($_REQUEST['class']);

           // header("location:result.php?roll=$roll&class=$class");
        }
    ?>
</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
    <h1> Anybody Public High School  </h1>

<center>
  <a class="block" href="/Online_Result_System/info.php" >Student info</a>
  <a class="block" href="/Online_Result_System/notice.php" style = "margin-left:3%;"  >Notice</a>
  <a class="block" href="/Online_Result_System/result.php" style = "margin-left:3%;"  >Result</a>

  <br><br><br><br><br>
  <a href = "index.php" style = "color:red;font-weight:bold;font-size: 25px; " >Home </a> 
  <a href = "studentlogin.php" style = "color:red;font-weight:bold;font-size: 25px; margin-left:3%;" >student-login </a>   
  <a href = "studentlogin.php" style = "color:red;font-weight:bold;font-size: 25px;margin-left:3%;margin-right:2%  " >Back </a>  
   
  
  
</center>



    <!--
    <p style = "color:black;font-weight:bold;font-size: 25px;"> Seach Annual Score </p>
    <div class = "container">
    <form action = "" method = "POST">
        <div>
        <caption> <strong id="c"> <u> Basic Info </u> </strong></caption>
        <br> <br>
            <label for = "roll" id="l"> Roll :  </label> <input type = "number" name = "roll" required>
        </div>
            <br>
            <label for = "class" id="l"> Class:  </label> <input type="text" id="fname" name="class" size="30">
            <select name = "class">
                <option readonly></option>
                <option>5A</option>
                <option>5B</option>
                <option>6A</option>
                <option>6B</option>
                <option>7A</option>
                <option>7B</option>
                <option>8A</option>
                <option>8B</option>
                <option>9A</option>
                <option>9B</option>
                <option>10A</option>
                <option>10B</option>
                <option>11A</option>
                <option>11B</option>
                <option>12A</option>
                <option>12B</option>
            </select>  
            <br> <br>
            <center>
                 <button type = "submit" style = "background-color:#32CD32; padding:4px 6px; width:90px;" name = "submit"> Search </button> 
                 <button type = "reset" style = "background-color:red;padding:4px 6px; width:90px;" name = "reset"> Reset </button>
            </center>
            <a href = "index.php" style = "color:red;font-weight:bold;font-size: 20px;" >Home </a> 
            </div>
        </div>
    </form>
    </div>
    -->
</body>
</html>
