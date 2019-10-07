<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada variable GET yang dikirim
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['npm'])) {
          //query SQL
          $npm_upd = $_GET['npm'];
          $query = "SELECT * FROM mhs WHERE npm = '$npm_upd'"; 

          //eksekusi query
          $result = mysqli_query(connection(),$query);
      }  
  }

  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $npm = $_POST['npm'];
      $nama = $_POST['nama'];
      $ttl = $_POST['ttl'];
      $jenis_kelamin = $_POST['jenis_kelamin'];
      $alamat = $_POST['alamat'];
      $nohp = $_POST['nohp'];
      $jrs = $_POST['jrs'];
      $fkl = $_POST['fkl'];
      $univ = $_POST['univ'];
      //query SQL
      $sql = "UPDATE mhs SET nama='$nama', ttl='$ttl', jenis_kelamin='$jenis_kelamin', alamat='$alamat', nohp='$nohp', jrs='$jrs', fkl='$fkl', univ='$univ' WHERE npm='$npm'";

      //eksekusi query
      $result = mysqli_query(connection(),$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      //redirect ke halaman lain
      header('Location: index.php?status='.$status);
  }
  

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Update</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
   <section class="page-section portfolio" id="update">
      <div class="container">

            <h2 style="margin: 30px 0 30px 0;">Update Data Mahasiswa</h2>
            <form action="updatedt.php" method="POST">
              <?php while($data = mysqli_fetch_array($result)): ?>
              <div class="form-group">
                <label>NPM</label>
                <input type="text" class="form-control" placeholder="NPM Mahasiswa" name="npm" value="<?php echo $data['npm'];  ?>" required="required" readonly>
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" value="<?php echo $data['nama'];  ?>" required="required">
              </div>
              <div class="form-group">
                <label>TTL</label>
                <input type="date" class="form-control" placeholder="TTL Mahasiswa" name="ttl" value="<?php echo $data['ttl'];  ?>" required="required">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="custom-select" name="jenis_kelamin" required="required">
                  <option value="">Pilih Salah Satu</option>
                  <option value="L" <?php echo $data['jenis_kelamin']=='L' ? "selected" : "" ?>>Laki-Laki</option>
                  <option value="P" <?php echo $data['jenis_kelamin']=='P' ? "selected" : "" ?>>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" required="required"><?php echo $data['alamat'];  ?></textarea>
              </div>
              <div class="form-group">
                <label>No HP</label>
                <input type="text" class="form-control" placeholder="No HP Mahasiswa" name="nohp" value="<?php echo $data['nohp'];  ?>" required="required">
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control" placeholder="Jurusan Mahasiswa" name="jrs" value="<?php echo $data['jrs'];  ?>" required="required">
              </div>
              <div class="form-group">
                <label>Fakultas</label>
                <input type="text" class="form-control" placeholder="Fakultas Mahasiswa" name="fkl" value="<?php echo $data['fkl'];  ?>" required="required">
              </div>
              <div class="form-group">
                <label>Universitas</label>
                <input type="text" class="form-control" placeholder="Universitas Mahasiswa" name="univ" value="<?php echo $data['univ'];  ?>" required="required">
              </div>
              <?php endwhile; ?>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
      </div>
  </section>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>

  </body>
</html>