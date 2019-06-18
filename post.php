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
$query1=mysql_query("select * from user where user='$user'");
$row1=mysql_fetch_array($query1);
$id=$row1["id"];
$query=mysql_query("select * from post where user_id=$id");
$rowcount=mysql_num_rows($query);
?>
<table border="1">
<tr>
<td>Title</td>
<td>Content</td>
</tr>
<?php
for($i=1;$i<=$rowcount;$i++)
{
	  $row=mysql_fetch_array($query);
	  
?>
<tr>
<td><?php echo $row["title"] ?></td>
<td><?php echo $row["content"] ?></td>

</tr>

<?php
}
?>
</table>