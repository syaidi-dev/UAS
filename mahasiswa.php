<!DOCTYPE html>
<html lang="en">

    <head>
          <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <!--css bootstrap ambil dari web bootstrap langsung -->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
              
    </head>
		      
    <body>
    	
        <!-- Top content -->
        <div class="top-content">       	
            <div class="inner-bg">
                <div class="container">               	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-1 text">
                            <h1><strong>DATA MAHASISWA</strong> </h1>
                            <h4>FTI | Kelas 3i Reguler Malam Banjarmasin</h4>
                        </div>
                    </div>
                    <div class="col-sm-18 col-sm-offset-0 text">
                            <a class="btn btn-primary btn-block" href="index.php"><strong>Logout</strong></a>
                    </div>  
                    <div class="row">
                        <div class="col-sm-5">                       		                        
    		                <div class="container">
    						  <h2></h2>         
    						  <img src="img/pi.png" class="img-thumbnail" alt="Cinque Terre" width="500" height="400"> 
    						</div>
    					</div>                        
                        <div class="col-sm-1"></div>
                            <div class="col-sm-5">                       	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Tambah Data Mahasiswa</h3>
	                            		<p>Silahkan isi data berikut ini :</p>
	                        		</div>	                        		
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" class="registration-form" enctype="multipart/form-data" method="post" action="create_mahasiswa.php">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">NPM</label>
                                            <input type="npm" name="npm" placeholder="*NPM..." class="form-email form-control" id="form-email" required="required" autocomplete="off">
                                        </div>
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Nama</label>
				                        	<input type="nama" name="nama" placeholder="*Nama..." class="form-first-name form-control" id="form-first-name" required="required" autocomplete="off">
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" placeholder="*Tempat lahir..." class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" placeholder="*Tanggal Lahir..." class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Jenis Kelamin</label>
                                            <select type="text" name="jk" class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">
                                                <option>-- Jenis Kelamin --</option>
                                                <option value="L">Laki-Laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">Alamat</label>
				                        	<textarea name="alamat" placeholder="*Alamat..." class="form-about-yourself form-control" id="form-about-yourself" required="required" autocomplete="off"></textarea>
				                        </div>
                                            <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Kode Pos</label>
                                            <input type="text" name="kode_pos" placeholder="*Kode pos..." class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">
                                        </div>
                                        <button type="submit" class="btn">SIMPAN</button>
				                    </form>
			                    </div>
                        	</div>                       	
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>

        <main class="app-content">
            <div class="col-sm-12 col-sm-offset-1 text">
                <div>
                  <h1><i class="fa fa-th-list"></i>List Data Mahasiswa</h1>
                </div>
            </div>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1 text">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="sampleTable">
                  <thead>
                    <tr>
                      <th style="background-color: #009688;"><center>No.</center></th>
                      <th style="background-color: #009688;"><center>NPM</center></th>
                      <th style="background-color: #009688;"><center>Nama</center></th>
                      <th style="background-color: #009688;"><center>Tempat Lahir</center></th>
                      <th style="background-color: #009688;"><center>Tanggal Lahir</center></th>
                      <th style="background-color: #009688;"><center>Jenis Kelamin</center></th>
                      <th style="background-color: #009688;"><center>Alamat</center></th>
                      <th style="background-color: #009688;"><center>Kode Pos</center></th>
                      <th style="background-color: #009688;"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($conn,"SELECT * FROM tb_mahasiswa");
                    while($d = mysqli_fetch_array($data)){
                      ?>
                      <tr>
                        <td><center><?php echo $no++; ?></center></td>
                        <td><?php echo $d['npm']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['tempat_lahir']; ?></td>
                        <td><center><?php echo $d['tanggal_lahir']; ?></center></td>
                        <td><center><?php echo $d['jenis_kelamin']; ?></center></td>
                        <td><center><?php echo $d['alamat']; ?></center></td>
                        <td><center><?php echo $d['kode_pos']; ?></center></td>
                        <td><center><strong><a href="edit.php?npm=<?php echo $d['npm']; ?>">Edit</a> <a href="delete.php?npm=<?php echo $d['npm']; ?>" onclick="return confirm('Yakin Menghapus?');">/ Hapus</a></strong></center></td>
                        </tr>
                    <?php } ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			<div class="text-center">
        				<p>Copyright &copy; 2021 All rights reserved | by <a target="_blank"><strong>M. Syaidi | NPM : 19630101 | Kelas : 3i Reguler Malam Banjarmasin</strong></a> 
        				<i class="fa fa-smile-o"></i></p>
        			</div>        			
        		</div>
        	</div>
        </footer>

    <!-- Data table plugin-->
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    </body>
</html>