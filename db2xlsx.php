<html>  
  
<head>  
    <title>User Detail Report</title>  
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
  
<body>  
    <table border="1">  
        <tr>  
            <th>Sr NO.</th>  
            <th width="120">User Name</th>  
            <th>Password</th>  
        </tr>  
        <?php  
		
$conn = new mysqli('localhost', 'root', '');   
mysqli_select_db($conn, 'test');   
$conn->set_charset("utf8");
  
$sql = mysqli_query($conn,"SELECT `ur_Id`,`ur_username`,`ur_password` FROM `tbl_user`");  
  
  
while($data = mysqli_fetch_row($sql)){  
echo '  
<tr>  
<td>'.$data[0].'</td>  
<td>'.$data[1].'</td>  
<td>'.$data[2].'</td>  
</tr>  
';  
}  
?>  
    </table> <a href="/Export.php"> Export To Excel </a>
</body>  
  
</html>
