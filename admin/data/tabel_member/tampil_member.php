<link type="text/css" rel="stylesheet" href="assets/development-bundle/themes/ui-lightness/ui.all.css" />
<?php
  
  $tampil = mysqli_query($link, "SELECT * FROM member WHERE email='$email'") or die(mysqli_error($link));
  $data   = mysqli_fetch_array($tampil);
  
?>




<div class="row">
<div class="col-md-6">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Member</h3> 
                </div><!-- /.box-header -->
                <!-- form start -->
              <div class="box-body">
              
                <table class="table table-bordered table-striped" id="example1">
                  <tr>
                    <td>No Anggota</td>
                    <td><b><?php echo $data['no_anggota']; ?></b></td>
                  </tr>
                  <tr>
                    <td>Nama Lengkap</td>
                    <td><?php echo $data['nama_lengkap']; ?></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td><?php echo $data['tempat_lahir']; ?></td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td><?php echo $data['tanggal_lahir']; ?></td>
                  </tr>
                  <tr>
                    <td>Provinsi Domisili Saat ini</td>
                    <td><?php echo $data['provinsi']; ?></td>
                  </tr>
                  <tr>
                    <td>Kota Domisili Saat ini</td>
                    <td><?php echo $data['kota']; ?></td>
                  </tr>
                  <tr>
                    <td>
                       <a href="?tampil=update_member&id=<?php echo $data['no_anggota']?>" class="btn btn-primary">Edit</a></td>
                  </tr>
                </table>
    </div>
    
                
             
       
    
    </div>
              
</div>
<div class="col-md-6">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Data Member</h3> 
                </div><!-- /.box-header -->
                <!-- form start -->
              <div class="box-body">
              
                <table class="table table-bordered table-striped" id="example1">
                  
                  <tr>
                    <td rowspan="4">
                      <img src="assets/foto_profil/avatar.jpg" class="img-rounded img-thumbnail" alt="Foto Profil" height="160px">
                    </td>
                    <td>No HP (Whatsapp)</td>
                    <td><?php echo $data['no_hp']; ?></td>
                    <td>
                      <a href="?tampil=update_nohp&id=<?php echo $data['no_anggota']?>"><i class="fa fa-pencil"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><?php echo $data['email']; ?></td>
                    <td>
                      <a href="?tampil=update_email&id=<?php echo $data['no_anggota']?>"><i class="fa fa-pencil"></i></a>
                    </td>                  
                  </tr>
                  <tr>
                    <td>Instagram</td>
                    <td>
                      <a href="https://www.instagram.com/<?php echo $data['instagram']; ?>" target="_blank">
                        <?php echo $data['instagram']; ?>
                      </a>
                    </td>
                    <td>
                      <a href="?tampil=update_instagram&id=<?php echo $data['no_anggota']?>"><i class="fa fa-pencil"></i></a>
                    </td> 
                  </tr>
                  <tr>
                    <td>Status Pendidikan</td>
                    <td><?php echo $data['status_pendidikan'].' | '.$data['kelas']; ?></td>
                    <td><i class="fa fa-pencil"></i></td>
                  </tr>
                  <tr>
                    <td rowspan="8"><a href="?tampil=update_foto&id=<?php echo $data['no_anggota']?>"><i class="fa fa-pencil"></i> Ganti Foto</a></td>
                  </tr>
                  <tr>
                      <td>Apakah anda pernah menjadi pengurus Sahabat Beasiswa Pusat? </td>
                      <td><?php echo $data['pengurus_pusat']; ?></td>
                  </tr>
                  <?php
                  $pengurus_pusat=$data['pengurus_pusat'];
                  if($pengurus_pusat == "Ya"){
                  ?>
                  <tr>
                      <td>Menjadi pengurus pada tahun : </td>
                      <td><?php echo $data['tahun_menjabat']; ?></td>
                  </tr>
                  <tr>
                      <td>Jabatan saat menjadi pengurus : </td>
                      <td><?php echo $data['jabatan']; ?></td>
                  </tr>
                  <?php
                  }
                  ?>

                  <tr>
                      <td>Apakah anda pernah menjadi pengurus Sahabat Beasiswa Chapter? </td>
                      <td><?php echo $data['pengurus_chapter']; ?></td>
                  </tr>
                  <?php
                  $pengurus_chapter=$data['pengurus_chapter'];
                  if($pengurus_chapter == "Ya"){
                  ?>
                  <tr>
                      <td>Di chapter mana anda pernah jadi pengurus? * : </td>
                      <td><?php echo $data['nama_chapter']; ?></td>
                  </tr>
                  <tr>
                      <td>Menjadi pengurus pada tahun : </td>
                      <td><?php echo $data['chapter_tahun_menjabat']; ?></td>
                  </tr>
                  <tr>
                      <td>Jabatan saat menjadi pengurus : </td>
                      <td><?php echo $data['chapter_jabatan']; ?></td>
                  </tr>
                  <?php
                  }
                  ?>
                  <tr>
                      <td>Curiculum Vitae</td>
                      <td colspan="2">
                        <?php echo $data['cv']; ?>
                      </td>
                      <td><i class="fa fa-pencil"></i></td>
                  </tr>
                </table>
    </div>

                  <!-- /.box-body -->
        
               
              </div><!-- /.box -->

            
</div>
</div>