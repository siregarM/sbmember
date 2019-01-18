<?php
  
  $tampil = mysqli_query($link, "SELECT instagram,password,no_anggota FROM tabel_member WHERE no_anggota='$_GET[id]'") or die(mysqli_error($link));
  $data   = mysqli_fetch_array($tampil);
  
?>
<script type="text/javascript">
      function goBack() {
        window.history.back(-1);
      }
      </script>


<div class="row">
<div class="col-md-6">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Edit Instagram</h3> <span class="fa fa-pencil"></span>
                  <button onclick="goBack()">Go Back</button>
                </div><!-- /.box-header -->
                <!-- form start -->
              <div class="box-body">
              <form name="tambah" method="post" action="" enctype="multipart/form-data" class="form-horizontal">  
              
                <div class="form-group">
                <div class="col-md-9"> <input type="hidden" class="form-control" value="<?php echo $data['no_anggota']; ?>"name="noAnggota" size="50" readonly ></div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Status Pendidikan</label> 
                <div class="col-md-9">
                  <select class="form-control" name="status_pendidikan" onchange='this.form.submit()'>
                      <option><?php echo $_POST['status_pendidikan']?></option>
                      <option>Siswa SMA/Sederajat</option>
                      <option>Lulusan SMA/Sederajat</option>
                      <option>Mahasiswa D3</option>
                      <option>Alumni D3</option>
                      <option>Mahasiswa S1</option>
                      <option>Alumni S1</option>
                      <option>Mahasiswa S2</option>
                      <option>Alumni S2</option>
                      <option>Other</option>
                  </select>
                </div>
                </div>
                <?php                  
                  $status_pendidikan=$_POST['status_pendidikan'];
                  if (isset($status_pendidikan)) {
                      if($status_pendidikan == "Siswa SMA/Sederajat"){
                        $kelas = "Kelas";
                      }elseif($status_pendidikan == "Lulusan SMA/Sederajat"){
                        $kelas = "Alumni SMA Tahun";
                      }elseif ($status_pendidikan == "Mahasiswa D3") {
                        $kelas = "D3 Semester";
                      }elseif ($status_pendidikan == "Alumni D3") {
                        $kelas = "Alumni D3 Tahun";
                      }elseif ($status_pendidikan == "Mahasiswa S1") {
                        $kelas = "S1 Semester";
                      }elseif ($status_pendidikan == "Alumni S1") {
                        $kelas = "Alumni S1 Tahun";
                      }elseif ($status_pendidikan == "Mahasiswa S2") {
                        $kelas = "S2 Semester";
                      }elseif($status_pendidikan == "Alumni S2"){
                        $kelas = "Alumni S2 Tahun";
                      }else{
                        $kelas = "Other";
                      }
                ?>
                    <div class="form-group">
                    <label class="label-control col-md-2"><?php echo $kelas?></label>  
                    <div class="col-md-9"> <input type="text" class="form-control" placeholder="<?php echo $kelas?>...." name="kelas" size="50" required ></div>
                    </div>
                <?php } ?>
                <div class="form-group">
                <label class="label-control col-md-2">Password</label>  
                <div class="col-md-9"> <input type="password" class="form-control" placeholder="Masukkan Password...." name="password" size="50" required ></div>
                </div>
                
       
                <div class="form-group">
                  <label class="label-control col-md-2"></label>        
                  <div class="col-md-2"> <input type="submit" name="tambah" value="simpan" class="btn btn-primary"></div>
                 </div>
                </div>
    
              </form>
                <div class="form-group">
                
                <div class="col-md-12">
                <?php 
                $password=$data['password'];
                $verif_password=$_POST['password'];
                if(isset($_POST['tambah'])){  
                      if ($verif_password == $password) {
                        include"update_proses_pendidikan.php";
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
