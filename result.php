
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sample Wipro </title>
    <style>
        body
        {
            height: 920px;
            background-image: linear-gradient(white,#99ff33,#00ff00);

        }
        h1
        {
            text-align: center;
            color:rgb(156, 79, 2);
            font-size: 60px;
            text-shadow: 2px 2px white;
        }
        a
        {
            display: inline-block;
            color:red;
            font-size: 30px;
            text-shadow: 2px 2px white;
        }
        table
        {
            background-image: linear-gradient(red, yellow);
            width:600px;

        }
        .container{
            
            font-size: 30px;

        }

        }
        select
        {
            width: 150px;
        }
        #a{
 			 font-weight:bold;
 			 text-shadow: 2px 2px white;
 			 font-size:35px;
 			 text-align:center;
 			 box-shadow: 2px 2px white;

			}
		  #b{
 			 font-weight:bold;
 			 text-shadow: 2px 2px white;
 			 font-size:35px;
 			 text-align:center;
 			 box-shadow: 2px 2px white;
			}


        @media screen and (min-device-width: 280px) and (max-device-width: 604px){
      body
        {
            height: 920px;
            background-image: linear-gradient(white,#99ff33,#00ff00);

        }
        h1
        {
            text-align: center;
            color:rgb(156, 79, 2);
            font-size: 40px;
            text-shadow: 2px 2px white;
        }
        a
        {
            display: inline-block;
            color:red;
            font-size: 28px;
            text-shadow: 2px 2px white;
        }
        table
        {
            background-image: linear-gradient(red, yellow);
            width:280px;

        }
        .container{
            
            font-size: 15px;

        }

        }
        select
        {
            width: 130px;
        }
        #a{
             font-weight:bold;
             text-shadow: 2px 2px white;
             font-size:15px;
             text-align:center;
             box-shadow: 2px 2px white;

            }
          #b{
             font-weight:bold;
             text-shadow: 2px 2px white;
             font-size:15px;
             text-align:center;
             box-shadow: 2px 2px white;
            }

        }  



    </style>
</head>
<body>
<center>
<img src = "logo.png" width = "120px" height="150px">   
</center>
<h1> Anybody Public High School  </h1>
<?php
require_once 'include.php';
function grade($avg)
{
    if ($avg >= 60)
        $grade = "A";
    else if($avg >= 50)
        $grade = "B";
    else if($avg >= 40)
        $grade = "C";
    else
        $grade = "D";
return $grade;
}
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true)
$roll=$_SESSION['roll'];
$name=$_SESSION['name'];
$class=$_SESSION['class'];
//$roll =  htmlentities($_GET['roll']);
//$class =  htmlentities($_GET['class']);
//Query & retriving data from database
$query = "SELECT * FROM umarks WHERE roll = '$roll' AND class = '$class'";
$result = mysqli_query($con,$query);
$count = mysqli_num_rows($result);
?>
<table border = "2" cellspacing = "3" cellpadding = "3" align = "center" width = "300px" height = "100px" bgcolor = "cyan" bordercolor="red">
<tr>
        <th id="a"> Bengali </th> <th id="a"> English</th> <th id="a"> Science </th> <th id="a"> Total </th> <th id="a"> Avg </th> <th id="a"> Grade </th>
</tr>
<?php
if($count > 0) 
{ 
    $row = mysqli_fetch_assoc($result); 
    $sum = $row['bng'] + $row['eng'] + $row['sci'];
    $avg = $sum / 3;
?>
<b>
<center>
<div class="container">
<?php echo "Name : ". $row['name']?>
<br>
<?php echo "Roll : ". $row['roll']?>
<br>
<?php echo "Class : ". $row['class']?>
</div>
</center>
</b><br>


    <tr align = "center">
        <td id="b"> <?php echo $row['bng'] ?> </td> <td id="b"> <?php echo $row['eng'] ?> </td> <td id="b"> <?php echo $row['sci'] ?> </td> <td id="b"> <?php echo $sum ?> </td> <td id="b"> <?php echo round($avg) ?></td> <td id="b"> <?php echo grade($avg) ?></td>
    </tr>
</table>
<?php
}
else
{
?>
    <tr align = "center">
        <td colspan = "6"> <b> Result has not been published yet  </b> </td>
    </tr>
</table>
<?php
}
mysqli_close($con);
?>
<br><br><br>
<!--for new search-->
<center>
<a href = "studentlogin.php" style = "color:black;font-weight:bold;font-size: 24px;margin-right:2% ">Search New </a>
<a href = "index.php" style = "color:black;font-weight:bold;font-size: 24px; margin-left:2%;" >Home </a> 
<a href = "search.php" style = "color:black;font-weight:bold;font-size: 24px;margin-left:4%;margin-right:2%  " >Back </a> 
 </center>    

</body>
</html>