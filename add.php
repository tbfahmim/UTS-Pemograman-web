<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>NIM Mahasiswa</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr> 
				<td>Nama Operator</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Nama Wilayah</td>
				<td><select name="wilayah">
					<option value="DKI Jakarta">DKI Jakarta</option>
					<option value="Jawa Barat">Jawa Barat</option>
					<option value="Banten">Banten</option>
					<option value="Jawa Tengah">Jawa Tengah</option>
				</select></td>
			</tr>
			<tr> 
				<td>Jumlah Positif</td>
				<td><input type="text" name="positif"></td>
			</tr>
			<tr> 
				<td>Jumlah Dirawat</td>
				<td><input type="text" name="dirawat"></td>
			</tr>
			<tr> 
				<td>Jumlah Sembuh</td>
				<td><input type="text" name="sembuh"></td>
			</tr>
			<tr> 
				<td>Jumlah Meninggal</td>
				<td><input type="text" name="meninggal"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nim 		= $_POST['nim'];
		$nama 		= $_POST['nama'];
		$wilayah 	= $_POST['wilayah'];
		$Positif 	= $_POST['positif'];
		$Dirawat 	= $_POST['dirawat'];
		$sembuh 	= $_POST['sembuh'];
		$meninggal = $_POST['meninggal'];
		
		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(nim, 		
nama,		
wilayah, 
Positif, 
Dirawat, 
sembuh, 	
meninggal) VALUES(
'$nim', 		
'$nama', 		
'$wilayah', 	
'$Positif', 	
'$Dirawat', 	
'$sembuh', 	
'$meninggal' )");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>