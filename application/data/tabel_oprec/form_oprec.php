<?php
  $tampil = mysqli_query($link, "SELECT * FROM tabel_member WHERE no_anggota='$_GET[id]'") or die(mysqli_error($link));
  $data   = mysqli_fetch_array($tampil);
  
?>

<script type="text/javascript">
      function goBack() {
        window.history.back();
      }
      </script>

<div class="row">
<div class="col-md-6">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Daftar Oprec</h3> <span class="fa fa-pencil"></span>
                  <button onclick="goBack()">Go Back</button>
                </div><!-- /.box-header -->
                <!-- form start -->
              <div class="box-body">
              <form name="tambah" method="post" action="" enctype="multipart/form-data" class="form-horizontal">  
              
                <div class="form-group">
                <div class="col-md-9"> <input type="hidden" class="form-control" value="<?php echo $data['no_anggota']; ?>"name="noAnggota" size="50" readonly ></div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Posisi</label> 
                <div class="col-md-9">
                  <select name="posisi">
                    <option></option>
                  </select>
                </div>
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
                        include"update_proses_email.php";
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
