<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
	<div id="container" class="container_12">
	  	<div id="header" class="grid_12"></div>
	  	<div id="subHeader" class="grid_12">
	            <ul>
					<li class="menu" style="float: right;"><a href=""><input type="text" placeholder="Search.."></a></li>
				</ul>
	    </div>
	 
	    <div id="content" class="grid_4" style="margin-right: 0;">
	    		<img src="image/ry.jpeg" style="margin-top: 50px;" class="img">
	    </div>
	    <div id="content" class="grid_8" style="margin-left: 0; height: 280px; width: 640px">
	    		<h3 style="text-decoration: underline; text-align: left; margin-left: 110px">Personal Profile</h3>
			
				<table>
					<br>
					<tr><td></td><td style="width: 100px" valign="top">NAMA</td><td>:</td><td><?php echo $_POST["nama"] ?></td></tr>
					<tr><td></td><td valign="top">NPM</td><td>:</td><td><?php echo $_POST["npm"] ?></td></tr>
					<tr><td></td><td valign="top">TTL</td><td>:</td><td><?php echo $_POST["ttl"] ?></td></tr>
					<tr><td></td><td valign="top">ALAMAT</td><td>:</td><td><?php echo $_POST["alamat"] ?></td></tr>
					<tr><td></td><td valign="top">NO HP</td><td>:</td><td><?php echo $_POST["nohp"] ?></td></tr>
					<tr><td></td><td valign="top">EMAIL</td><td>:</td><td><?php echo $_POST["email"] ?></td></tr>
					<tr><td></td><td valign="top">JURUSAN</td><td>:</td><td><?php echo $_POST["jrs"] ?></td></tr>
					<tr><td></td><td valign="top">FAKULTAS</td><td>:</td><td><?php echo $_POST["fkl"] ?></td></tr>
					<tr><td></td><td valign="top">UNIV</td><td>:</td><td><?php echo $_POST["univ"] ?></td></tr>
					<tr><td></td><td valign="top">UNIV</td><td>:</td><td><?php echo $_POST["univ"] ?></td></tr>
				</table>
	    </div>

	    <div id="content" class="grid_12">
	        <h3 style="text-decoration: underline; text-align: center;">Education</h3>
			<table>
				<tr><td></td><td width="70"></td><td style="width: 150px">SMA</td><td></td><td><?php echo $_POST["sma"] ?></td></tr>
				<tr><td></td><td></td><td>SMP</td><td></td><td><?php echo $_POST["smp"] ?></td></tr>
				<tr><td></td><td></td><td>SD</td><td></td><td><?php echo $_POST["sd"] ?></td></tr>
				<tr><td></td></tr>
			</table>
	    </div>

	    <div id="content" class="grid_12">
	        <h3 style="text-align: center; text-decoration: underline;">Social Media</h3>
	          <table class="grid_12">
	            <tr align="center">
	              <td class="ig grid_5">
	                <a href="https://www.instagram.com/rahayuairie/">
	                  <img src="image\ig.png" alt="Instagram" width="30%">
	                </a>
	              </td>

	              <td class="fb grid_5">
	                <a href="https://facebook.com/rahayu.airie">
	                  <img src="image\fb.png" alt="Facebook" width="30%">
	                </a>
	              </td>
	            </tr>
	          </table>
      	</div>

	    <div id="footer" class="grid_12">
	    	<p align="center">Copyright@2019.Airie</p>
	    </div>
	</div>

</body>
</html>