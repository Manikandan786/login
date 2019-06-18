<?php
session_start();
mysql_connect("182.50.133.83:3306","ManikandanS","Manikandan8150");
mysql_select_db("ph11421999341_");

if(isset($_REQUEST["submit"]))
{
	  $user=$_REQUEST["user"];
	  $pass=$_REQUEST["pass"];
	  $query=mysql_query("select * from user where user='$user' && pass='$pass'");
	  $rowcount=mysql_num_rows($query);
	  if($rowcount==true)
	  {
		    $_SESSION["user"]=$user;
		   header('location:welcome.php');
	  }
	  else
	  {
		   echo "<center>your username and password is wrong</center>";
	  }
}

?>



<form method="post">
<table border="1" align="center">
<tr>
<td>Username</td>
<td><input type="text" name="user"></td>

</tr>
<tr>
<td>Password</td>
<td><input type="text" name="pass"></td>

</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="Login" name="submit"></td>
</tr>


</table>
</form>