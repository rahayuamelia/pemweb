<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<table border="1">
			<thead>
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Alamat</th>
			</tr>
			</thead>
			<tbody>
				<?php
					$array = array();
					for ($x = 1; $x <= $_POST['jmlh'] ; $x++) {
						$array[$x] = array(
								"No"=>$x,
								"NPM"=>"01500$x",
								"Nama"=>"SUDEMO$x",
								"Alamat"=>"JL. INDAH NO.$x");
						}

						foreach($array as $array){
							echo "<tr>";
							foreach($array as $key => $val){
								echo "<td>$val</td>";
							}
							echo "</tr>";
						}
				?>
			</tbody>
		</table>

</body>
</html>