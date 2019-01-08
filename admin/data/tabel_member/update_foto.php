<script type="text/javascript">
      function goBack() {
        window.history.back();
      }
      </script>
<script type="text/javascript">
function tampilkanPreview(userfile,idpreview)
{
  var gb = userfile.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.jpeg/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .jpeg or .jpg.");
      }
  }
}
</script>
<div class="row">
<div class="col-md-6">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Ganti Foto Profil</h3> <span class="fa fa-pencil"></span>
                  <button onclick="goBack()">Go Back</button>
                  <p>Tipe file Gambar harus bertipe .jpeg or .jpg.</p>
                </div><!-- /.box-header -->
                <!-- form start -->
              <div class="box-body">
              <form name="tambah" method="post" action="" enctype="multipart/form-data" class="form-horizontal">  
              
                <div class="form-group">
                <div class="col-md-9"> <input type="hidden" class="form-control" value="<?php echo $data['no_anggota']; ?>"name="noAnggota" size="50" readonly ></div>
                </div>
                <div class="form-group">
                <label class="label-control col-md-2">Email</label> 
                <div class="col-md-9"> <input type="file" name="userfile" accept="image/jpeg" id="userfile" onchange="tampilkanPreview(this,'preview')" required/></div>
                </div>
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
                        include"update_proses_foto.php";
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

<div class="col-md-6">
     <div class="box-body">
      <img id="preview" width="160px"/>
    </div>
    <?php echo php_ini_loaded_file(); ?>