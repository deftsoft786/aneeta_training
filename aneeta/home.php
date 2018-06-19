<?php
	include('config.php');
session_start();
if(empty($_SESSION['name'])){
	header('Location:login.php');
}
$sql = "SELECT * FROM anu";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}





?>

<html>
<head>
<style>
 
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}

.abc{
	float:right;
}
</style>
</head>
<body>
	<div class="abc">
<a href ="logout.php" name="button">Log Out</a>
</div> 
<h4>Hi <?php echo $_SESSION['name'];  ?></h4>
 <a href="index.php"> Registration Form</a>
<table>
  <tr>
    <th>Image</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email Address</th>
    <th>Uname</th>
    <th>Action</th>
  </tr>
<?php foreach($data as $value){ ?>
<tr>
	
    <td><img width="50px" src="upload/<?php echo $value['image'];  ?>"></td>
    <td><?php echo $value['fname'] ;?></td>
    <td><?php echo $value['lname'] ;?></td>
    <td><?php echo $value['email'] ;?></td>
    <td><?php echo $value['uname'] ;?></td>
<td><a href="Edit">Edit</a> 
 <a href="delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
</tr>
  <?php } ?>
</table>

</body>
</html>
