<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #9A208C;
  
}
li {
  float: left;
}
li a {
  display: block;
  color: blue;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: #9A208C;
}
.active {
  background-color: #04AA6D;
}

</style>
</head>
<body>

<div class="header">
  <center><h2 style="color:maroon">Web Development</h2>
  
 <?php  
 $tdy=date("M d, Y");
 $tdy1=date("l");
//  die($tdy);
// var_dump($tdy);
echo $tdy.''.$tdy1;
// echo $tdy ;
//  echo "<b style='color:Red'>Today is " . date("l").' '. date("y-m-d").'<br>'; 
//  echo "<b style='color:Red'>Today is " .$tdy; 
 
//  die('uwian na');
// var_dump($tdy);
// echo $tdy;
// die();
 
 ?></center>
		
   
    <!-- <?php
			echo "Today is " . date("Y/m/d") . "<br>";
			echo "Today is " . date("Y.m.d") . "<br>";
			echo "Today is " . date("Y-m-d") . "<br>";
			echo "Today is " . date("l");
			?> -->
</div>
<ul style="background-color:maroon">
  <li ><a href="#home">Home</a></li>
  <li ><a href="#news" >About Me</a></li>
 
  <li ><a href="#news" >Activity</a></li>

</ul>

</body>
</html>


