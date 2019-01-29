<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<body>

<h3 align="center">Table Person Hobies</h3>
<div style="overflow-x:auto;">
<table border="1" align="center" cellpadding="5" cellspacing="0">
	
<tr>
		
<th> No </th>

<th> Person Id </th>		

<th> Name </th>

		
<th> Person Hobies </th>

	</tr>

	

	<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "test_arkademy";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		$select = "select a.id AS person_id, a.name, GROUP_CONCAT(b.name) AS person_hobies from categories a join hobies b on a.id=b.person_id GROUP BY a.id";
		$result = $conn->query($select);

		$no=0;
		while ($data = $result->fetch_assoc()) {
			$person_id 		= $data['person_id'];  // dr tabel
			$name 		= $data['name'];
			$person_hobies	= $data['person_hobies'];
			$no++;
			echo "
				
<tr>
					
<td> $no </td>

					
<td> $person_id </td>

					
<td> $name </td>
<td> $person_hobies </td>
					

				</tr>

			";
		}

	?>
</table>
</div>

</body>
</html>