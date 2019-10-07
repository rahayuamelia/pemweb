<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body class="body">

	<div>
		<h2 style="text-align: center; color: white;">FORM INPUT DATA</h2>
	</div>
	<div class="form">
		<form action="myweb.php" method="post" >
			<h3>BIODATA</h3>
			<br>
			<table>
				<tr>
					<td>Nama </td>
					<td><input type="text" name="nama"><br></td>
				</tr>
				<tr>
					<td>NPM </td>
					<td><input type="text" name="npm"><br></td>
				</tr>
				<tr>
					<td>TTL </td>
					<td><input type="date" name="ttl" style="width: 168px"><br></td>
				</tr>
				<tr>
					<td>Alamat </td>
					<td><input type="text" name="alamat"><br></td>
				</tr>
				<tr>
					<td>No HP </td>
					<td><input type="text" name="nohp"><br></td>
				</tr>
				<tr>
					<td>Email </td>
					<td><input type="text" name="email"><br></td>
				</tr>
				<tr>
					<td>Jurusan </td>
					<td><input type="text" name="jrs"><br></td>
				</tr>
				<tr>
					<td>Fakultas </td>
					<td><input type="text" name="fkl"><br></td>
				</tr>
				<tr>
					<td>Universitas </td>
					<td><input type="text" name="univ"><br></td>
				</tr>
			</table>
			<br>
			<h3>EDUCATION</h3>
			<br>
			<table>
				<tr>
					<td width="78px">SMA</td>
					<td><input type="text" name="sma"><br></td>
				</tr>
				<tr>
					<td>SMP</td>
					<td><input type="text" name="smp"><br></td>
				</tr>
				<tr>
					<td>SD</td>
					<td><input type="text" name="sd"></td>
				</tr>	
			</table>

			<br><br>
			<button class="btn" type="submit" style="margin-left: 200px;">INPUT</button>
			
		</form>
	</div>
	

</body>
</html>