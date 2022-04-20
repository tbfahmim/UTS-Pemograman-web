<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
$result1 = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Add New User</a><br/><br/>

<p align="center">
     <?php
    while($user_data = mysqli_fetch_array($result)) { 
        echo"Data Pemantaun Covid19 Wilayah ".$user_data['wilayah'];

        echo "<br>Per ".date("d-M-Y h:i:sa");
        echo "<br>".$user_data['nama']."/".$user_data['nim'];
    }

    ?> 
</p>
    <table width='80%' border=1>
    <tr>
        <th>Positif</th> <th>Dirawat</th> <th>Sembuh</th> <th>Meninggal</th>
    </tr>
    <?php  
    while($user_data1 = mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td>".$user_data1['positif']."</td>";
        echo "<td>".$user_data1['dirawat']."</td>";
        echo "<td>".$user_data1['sembuh']."</td>";   
        echo "<td>".$user_data1['meninggal']."</td>";  
        // echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>