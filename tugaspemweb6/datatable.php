<?php 
  //memanggil file conn.php yang berisi koneski ke database
  //dengan include, semua kode dalam file conn.php dapat digunakan pada file index.php
  include ('conn.php'); 

  $status = '';
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
      $query = "INSERT INTO mhs (npm, nama, ttl, jenis_kelamin, alamat, nohp, jrs, fkl, univ) VALUES('$npm','$nama','$ttl','$jenis_kelamin','$alamat','$nohp','$jrs','$fkl','$univ')"; 

      //eksekusi query
      $result = mysqli_query(connection(),$query);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Example</title>
    <!-- load css boostrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Pemrograman Web</a>
      <a class="nav-link active" href="<?php echo "datatable.php"; ?>">Data Mahasiswa</a>
    </nav>

        <main role="main" style="margin-left: 10px; margin-right: 10px;">
          <?php 
            //mengecek apakah proses update dan delete sukses/gagal
            if (@$_GET['status']!==NULL) {
              $status = $_GET['status'];
              if ($status=='ok') {
                echo '<br><br><div class="alert alert-success" role="alert">Data Mahasiswa berhasil di-update</div>';
              }
              elseif($status=='err'){
                echo '<br><br><div class="alert alert-danger" role="alert">Data Mahasiswa gagal di-update</div>';
              }

            }
           ?>

          <h2 style="margin: 30px 0 30px 0;">Mahasiswa</h2>
          <div class="table-responsive">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 20px">
                  Insert
            </button>
          <br><br>
            <table class="table table-striped table-bordered table-hover table-sm">
              <thead>
                <tr align="center">
                  <th>NPM</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Jurusan</th>
                  <th>Fakultas</th>
                  <th>Universitas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  //proses menampilkan data dari database:
                  //siapkan query SQL
                  $query = "SELECT * FROM mhs";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                  <tr>
                    <td><?php echo $data['npm'];  ?></td>
                    <td><?php echo $data['nama'];  ?></td>
                    <td><?php echo $data['ttl'];  ?></td>
                    <td><?php echo $data['jenis_kelamin'];  ?></td>
                    <td><?php echo $data['alamat'];  ?></td>
                    <td><?php echo $data['nohp'];  ?></td>
                    <td><?php echo $data['jrs'];  ?></td>
                    <td><?php echo $data['fkl'];  ?></td>
                    <td><?php echo $data['univ'];  ?></td>
                    <td>
                      <a href="<?php echo "updatedt.php?npm=".$data['npm']; ?>" class="btn btn-outline-warning btn-sm"> Update</a>
                            &nbsp;&nbsp;
                      <a href="<?php echo "index.php?npm=".$data['npm']; ?>" class="btn btn-outline-success btn-sm"> View</a>
                            &nbsp;&nbsp;
                      <a onclick="javascript: return confirm('Anda yakin ingin menghapus?')" href="<?php echo "delete.php?npm=".$data['npm']; ?>" class="btn btn-outline-danger btn-sm"> Delete</a>
                            &nbsp;&nbsp;
                    </td>
                  </tr>
                 <?php endwhile ?>
              </tbody>
            </table>
          </div>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-body">
                <?php 
                      if ($status=='ok') {
                        echo '<div class="alert alert-success" role="alert">Data Mahasiswa berhasil disimpan</div>';
                      }
                      elseif($status=='err'){
                        echo '<div class="alert alert-danger" role="alert">Data Mahasiswa gagal disimpan</div>';
                      }
                ?>
                  <form action="datatable.php" method="POST">              
                    <div class="form-group">
                      <label>NPM</label>
                      <input type="text" class="form-control" placeholder="NPM Mahasiswa" name="npm" required="required">
                    </div>
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" required="required">
                    </div>
                    <div class="form-group">
                      <label>TTL</label>
                      <input type="date" class="form-control" placeholder="TTL Mahasiswa" name="ttl" required="required">
                    </div>
                    <div class="form-group">
                      <label>Jenis Kelamin</label>
                      <select class="custom-select" name="jenis_kelamin" required="required">
                        <option value="">Pilih Salah Satu</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Alamat</label>
                      <textarea class="form-control" name="alamat" required="required"></textarea>
                    </div>
                    <div class="form-group">
                      <label>No HP</label>
                      <input type="text" class="form-control" placeholder="No HP Mahasiswa" name="nohp" required="required">
                    </div>
                    <div class="form-group">
                      <label>Jurusan</label>
                      <input type="text" class="form-control" placeholder="Jurusan Mahasiswa" name="jrs" required="required">
                    </div>
                    <div class="form-group">
                      <label>Fakultas</label>
                      <input type="text" class="form-control" placeholder="Fakultas Mahasiswa" name="fkl" required="required">
                    </div>
                    <div class="form-group">
                      <label>Universitas</label>
                      <input type="text" class="form-control" placeholder="Universitas Mahasiswa" name="univ" required="required">
                    </div>
            
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>

                  </form>
              </div> 
            </div>
          </div>
        </div>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>

