<link type="text/css" rel="stylesheet" href="assets/development-bundle/themes/ui-lightness/ui.all.css" />
<?php
	
	$tampil = mysqli_query($link, "SELECT * FROM member WHERE no_anggota='$_GET[id]'") or die(mysqli_error($link));
	$data  	= mysqli_fetch_array($tampil);
	
?>


 <script src="assets/development-bundle/jquery-1.8.0.min.js"></script>
    <script src="assets/development-bundle/ui/ui.core.js"></script>
    <script src="assets/development-bundle/ui/ui.datepicker.js"></script>
    <script src="assets/development-bundle/ui/i18n/ui.datepicker-id.js"></script>
    
     <script type="text/javascript">
        $(document).ready(function(){
            $("#tanggal").datepicker({
                dateFormat : "yy-mm-dd",
                changeMonth : true,
                changeYear : true
            });
        });
		</script>


<div class="row">
<div class="col-md-12">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Edit Data Member</h3> <span class="fa fa-pencil"></span>
                </div><!-- /.box-header -->
                <!-- form start -->
              <div class="box-body">
              <form name="tambah" method="post" action="" enctype="multipart/form-data" class="form-horizontal">	
              
            		<div class="form-group">
                <label class="label-control col-md-2">Nomor Anggota</label> 
                <div class="col-md-9"> <input type="text" class="form-control" value="<?php echo $data['no_anggota']; ?>" placeholder="Isikan Nomor Anggota.." name="noAnggota" size="50" readonly ></div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Nama Lengkap</label> 
                <div class="col-md-9"> <input type="text" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" placeholder="Isikan Nama Anggota.." name="nama_lengkap" size="50" required ></div>
                </div>
                <div class="form-group">
                <label class=" label-control col-md-2">Jenis Kelamin</label>
                <div class="col-md-9">
                    <select name="jenis_kelamin" class="form-control" id="f">
                      <option><?php echo $data['jenis_kelamin'];?></option>
                      <option>-PILIH-</option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                </div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Tempat Lahir</label> 
                <div class="col-md-9"> <input type="text" class="form-control" value="<?php echo $data['tempat_lahir']; ?>" placeholder="Isikan Tempat Lahir.." name="tempatLahir" size="50" required></div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Tanggal Lahir</label> 
                <div class="col-md-9"> <input type="date" class="form-control" name="tanggalLahir" size="50" required/>
                </div>
                </div>
                
                <div class="form-group">
                <label class="label-control col-md-2">Provinsi Domisili Saat ini</label> 
                <div class="col-md-9"> <input type="text" class="form-control" value="<?php echo $data['provinsi']; ?>" placeholder="Isikan Provinsi Domisili Saat ini.." name="provinsi" size="50" required ></div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Kota Domisili Saat ini</label> 
                <div class="col-md-9"> <input type="text" class="form-control" value="<?php echo $data['kota']; ?>" placeholder="Isikan Kota Domisili Saat ini.." name="kota" size="50" required ></div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Password</label>  
                <div class="col-md-9"> <input type="password" class="form-control" placeholder="Masukkan Password...." name="password" size="50" required ></div>
                </div>
                
       
            		<div class="form-group">
            			<label class="label-control col-md-2"></label>				
            			<div class="col-md-12"> <input type="submit" name="tambah" value="simpan" class="btn btn-primary"></div>
            		</div>
		
              </form>
                <div class="form-group">
                
                <div class="col-md-12">
                <?php 
                $password=$data['password'];
                $verif_password=$_POST['password'];
                if(isset($_POST['tambah'])){  
                      if ($verif_password == $password) {
                        include"update_proses_member.php";
                      }else{
                        echo "<div class='alert alert-danger'>
                        <strong>Gagal!</strong> Password tidak sama
                      </div>";
                      }              
                }?>
                </div>
              
              </div>
            </div>
              
            </div><!-- /.box-body -->
</div><!-- /.box -->

            
</div>
</div>