<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css"/>


<div class="container">
  <h2>Form Pendaftaran</h2>
		       <form name="tambah" method="post" action="proses_daftar.php" enctype="multipart/form-data" class="form-horizontal">	
		
    <div class="form-group">
    <label class="label-control col-md-2">Nomor Anggota</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan Nomor Anggota.." name="noAnggota" size="50" required ></div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">Nama Anggota</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan Nama Anggota.." name="namaAnggota" size="50" required ></div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">Tempat Lahir</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan Tempat Lahir.." name="tempatLahir" size="50" required ></div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">Tanggal Lahir</label> 
    <div class="col-md-9"> <input type="date" class="form-control" name="tanggalLahir" size="50" required >
    </div>
    </div>
    <div class="form-group">
    <label class=" label-control col-md-2">Jenis Kelamin</label>
    <div class="col-md-9">
        <select name="jenisKelamin" class="form-control" id="f">
          <option>-PILIH-</option>
          <option>Laki-laki</option>
          <option>Perempuan</option>
        </select>
    </div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">Pekerjaan</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan Pekerjaan.." name="pekerjaan" size="50" required >
    </div>
    </div>
    <div class="form-group">
    <label class=" label-control col-md-2">Unit Kerja</label>
    <div class="col-md-9">
    <select name="unitKerja" class="form-control" id="unitkerja">
           <option>-PILIH-</option>
          <option>KANTOR DINAS KESEHATAN</option>
          <option>PUSKESMAS X KOTO I</option>
          <option>PUSKESMAS X KOTO II</option>
          <option>PUSKESMAS PARIANGAN</option>
          <option>PUSKESMAS BATIPUH I</option>
          <option>PUSKESMAS BATIPUH II</option>
          <option>PUSKESMAS BATIPUH III</option>
          <option>PUSKESMAS LIMA KAUM I</option>
          <option>PUSKESMAS LIMA KAUM II</option>
          <option>PUSKESMAS RAMBATAN I</option>
          <option>PUSKESMAS RAMBATAN II</option>
          <option>PUSKESMAS SUNGAI TARAB I</option>
          <option>PUSKESMAS SUNGAI TARAB II</option>
          <option>PUSKESMAS SALIMPAUNG I</option>
          <option>PUSKESMAS SALIMPAUNG II</option>
          <option>PUSKESMAS SUNGAYANG</option>
          <option>PUSKESMAS PADANG GANTING</option>
          <option>PUSKESMAS TANJUNG EMAS</option>
          <option>PUSKESMAS LINTAU BUO I</option>
          <option>PUSKESMAS LINTAU BUO II</option>
          <option>PUSKESMAS LINTAU BUO III</option>
          <option>PUSKESMAS SINGGALANG</option>
          <option>GUDANG FARMASI</option>
          <option>PUSKESMAS PAGARUYUNG</option>
          <option>PUSKESMAS GURUN</option>
            </select>
    </div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">Alamat Rumah</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan Alamat Rumah.." name="almRumah" size="50" required ></div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">TMT</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan TMT.." name="tmt" size="50" required ></div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">No Hp</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan No HP.." name="noHp" size="50" required ></div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">Username</label> 
    <div class="col-md-9"> <input type="text" class="form-control" placeholder="Isikan Username.." name="username" size="50" required ></div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-2">Password</label>	
    <div class="col-md-9"> <input type="password" class="form-control" placeholder="...." name="password" size="50" required ></div>
    </div>
    
            
        
        

        
        
       
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-12"> <input type="submit" name="tambah" value="simpan" class="btn btn-primary"></div>

			<label class="label-control col-md-2"></label>				
			<div class="col-md-12"> <a href="index.php"><input type="button" name="tambah" value="Login" class="btn btn-success"></a></div>
		</div>
		
</form>
	
</div>
<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
