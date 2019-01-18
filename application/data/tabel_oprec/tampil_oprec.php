<style>
  .cuadro_intro_hover{
        padding: 0px;
    position: relative;
    overflow: hidden;
    height: 200px;
  }
  .cuadro_intro_hover:hover .caption{
    opacity: 1;
    transform: translateY(-150px);
    -webkit-transform:translateY(-150px);
    -moz-transform:translateY(-150px);
    -ms-transform:translateY(-150px);
    -o-transform:translateY(-150px);
  }
  .cuadro_intro_hover img{
    z-index: 4;
  }
  .cuadro_intro_hover .caption{
    position: absolute;
    top:150px;
    -webkit-transition:all 0.3s ease-in-out;
    -moz-transition:all 0.3s ease-in-out;
    -o-transition:all 0.3s ease-in-out;
    -ms-transition:all 0.3s ease-in-out;
    transition:all 0.3s ease-in-out;
    width: 100%;
  }
  .cuadro_intro_hover .blur{
    background-color: rgba(0,0,0,0.7);
    height: 300px;
    z-index: 5;
    position: absolute;
    width: 100%;
  }
  .cuadro_intro_hover .caption-text{
    z-index: 10;
    color: #fff;
    position: absolute;
    height: 300px;
    text-align: center;
    top:-20px;
    width: 100%;
  }
</style>


<div class="row">
<div class="col-md-12">

              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Open Recruitment</h3> 
                </div><!-- /.box-header -->
                <!-- form start -->
              <div class="box-body">
                <table class="table table-bordered table-striped" id="example1">
                  <?php
                      
                      $tampil = mysqli_query($link, "SELECT *,day(tanggal_berakhir) as day FROM tabel_oprec") or die(mysqli_error($link));
                      while ($data   = mysqli_fetch_array($tampil)){
                      
                    ?>
                    <div class="col-lg-3">
                      <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                      <p style="text-align:center; margin-top:20px;">
                        <img src="http://placehold.it/500x330" class="img-responsive" alt="">
                      </p>
                      <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                          <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;"><?php echo $data['nama_oprec']?></h3>
                          <p>Open Recuiretmen mulai tanggal <?php echo $data['tanggal_mulai'];?> sampai tanggal <?php echo $data['tanggal_berakhir']?></p>
                          
                          <?php
                          $tanggal_sekarang=date("d");
                          $tanggal_berakhir=$data['day'];
                          if($tanggal_sekarang < $tanggal_berakhir){
                          ?>
                          <a class=" btn btn-success" href="?tampil=form_oprec?id=<?php echo $data['id']?>"><span class="glyphicon glyphicon-plus"> DAFTAR</span></a>
                          <?php
                          }else{
                          ?>
                          <a class=" btn btn-danger" href="#"><span class="glyphicon glyphicon-minus"> TUTUP</span></a>
                          <?php
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                    </div>
                  <?php
                    }
                  ?>
              </table>
              </div>              
              </div>
                 <!-- /.box-body -->
</div><!-- /.box -->          
</div>