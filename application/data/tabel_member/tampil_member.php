<?php
  
  $tampil = mysqli_query($link, "SELECT * FROM tabel_member WHERE email='$email'") or die(mysqli_error($link));
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
                    <td rowspan="5">
                      <?php
                      $avatar=$data['foto_profil'];
                      if($avatar=="NULL"){                        
                      ?>
                          <img src="media/foto_profil/avatar.jpg" class="img-rounded img-thumbnail" alt="Foto Profil" height="160px">
                      <?php
                      }else{
                        ?>
                          <img src="media/foto_profil/<?php echo $avatar?>" class="img-rounded img-thumbnail responsive" alt="Foto Profil" style="height: 160px;width: 75%; ">
                      <?php
                      }
                      ?>
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
                    <td>
                      <?php 
                      $status_pendidikan=$data['status_pendidikan'];
                      $kelasdb=$data['kelas'];
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
                      echo $status_pendidikan;

                      ?>                      
                    </td>
                    <td rowspan="2">
                      <a href="?tampil=update_pendidikan&id=<?php echo $data['no_anggota']?>"><i class="fa fa-pencil"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td><?php echo $kelas; ?></td>
                    <td><?php echo $kelasdb; ?></td>
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