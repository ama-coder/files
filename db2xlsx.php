<html>  
  
<head>  
    <title>User Report List</title>  
</head>  
  
<body>
  
 <table border="1">  
    <tr>  
        <th>Sr NO.</th>  
        <th width="120">User Name</th>  
        <th>Password</th>  
    </tr>  
</table> 
 </body>  
  
</html>
<?php  
   $conn = new mysqli('localhost', 'root', '');   
   mysqli_select_db($conn, 'EmployeeDB');   
   $conn->set_charset("utf8");

?>
