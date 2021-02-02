<!DOCTYPE html>
<html lang="en">

    <head>
          <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <!--css bootstrap ambil dari web bootstrap langsung -->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		  <style>
		  </style>              
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
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-centre">
	                    		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
		                    </div>                        
		                <div class="container">
						  <h2></h2>         
						  <img src="img/pi.png" class="img-thumbnail" alt="Cinque Terre" width="500" height="400"> 
						</div>
					</div>                       
                       <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>                        	
                        <div class="col-sm-5">                       	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Edit Data Mahasiswa</h3>
	                            		<p>Silahkan isi data berikut ini :</p>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    <?php 
                                    include 'koneksi.php';
                                    $npm     = $_GET['npm'];
                                    $data = mysqli_query($conn,"SELECT * FROM tb_mahasiswa WHERE npm='$npm'");
                                    while($d = mysqli_fetch_array($data)){
                                    ?>
				                    <form role="form" class="registration-form" enctype="multipart/form-data" method="post" action="update.php">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">NPM</label>
                                            <input type="npm" name="npm" value="<?php echo $d['npm']; ?>" class="form-email form-control" id="form-email" required="required" autocomplete="off">
                                        </div>
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">Nama</label>
				                        	<input type="nama" name="nama" value="<?php echo $d['nama']; ?>" class="form-first-name form-control" id="form-first-name" required="required" autocomplete="off">
				                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>" class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Tanggal Lahir</label>
                                            <input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>" class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Jenis Kelamin</label>
                                            <input type="text" name="jk" value="<?php echo $d['jenis_kelamin']; ?>" class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">                                               
                                        </div>
                                        <div class="form-group">
				                        	<label class="sr-only" for="form-about-yourself">Alamat</label>
				                        	<textarea name="alamat" class="form-about-yourself form-control" id="form-about-yourself" required="required" autocomplete="off"><?php echo $d['alamat']; ?></textarea>
				                        </div>
                                            <div class="form-group">
                                            <label class="sr-only" for="form-last-name">Kode Pos</label>
                                            <input type="text" name="kode_pos" value="<?php echo $d['kode_pos']; ?>" class="form-last-name form-control" id="form-last-name" required="required" autocomplete="off">
                                        </div>
                                        <button type="submit" class="btn">Update</button>
				                    </form>
                                    <?php } ?>
			                    </div>
                        	</div>                       	
                        </div>
                    </div>                    
                </div>
            </div>            
        </div>

        <main class="app-content">
      <div class="col-sm-12 col-sm-offset-1 text">  
    </div>

    </main>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			<div class="text-center">
        				<div class="footer-border"></div>
        				<p></p>
        				<p>Copyright &copy; 2021 All rights reserved | by <a target="_blank"><strong>M. Syaidi | NPM : 19630101 | Kelas : 3i Reguler Malam Banjarmasin</strong></a> 
        				<i class="fa fa-smile-o"></i></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

    </body>

</html>