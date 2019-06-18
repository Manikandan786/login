<?php
session_start();
mysql_connect("182.50.133.83:3306","ManikandanS","Manikandan8150");
mysql_select_db("ph11421999341_");
if($_SESSION["user"]==true)
{
echo "welcome"." ".$_SESSION["user"];
}
else
{
	 header('location:index.php');
}

?>
<a href="logout.php">Logout</a>

<?php
$user=$_SESSION["user"];
$query=mysql_query("select * from user where user='$user'");
$row=mysql_fetch_array($query);
$id=$row["id"];
if(isset($_REQUEST["submit"]))
{
	  $title=$_REQUEST["title"];
	  $content=$_REQUEST["content"];
	  mysql_query("insert into post(title,content,user_id)value('$title','$content','$id')");
}
?>

<form method="post">

<table border="1">

<tr>
<td>Title</td>
<td><input type="text" name="title"></td>
</tr>
<tr>
<td>Content</td>
<td><textarea name="content"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>


</table>

</form>


<a href="post.php">View Post</a>

