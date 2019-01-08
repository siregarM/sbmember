
<?php
session_start();


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
   
  
   
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <link href="admin/assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="admin/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap 3.3.2 -->
    <link href="admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="admin/assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="admin/assets/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="admin/assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="admin/assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="admin/assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="admin/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="admin/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  
    <!-- Date Picker -->
    <!-- Daterange picker -->
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="admin/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

      
      <script type="text/javascript">
       function cekform()
       {
        if(!$("#email").val()){

            alert('maaf Email tidak boleh kosong');
            $("#email").focus();
            return false

        }
		if(!$("#password").val()){
		 alert('maaf password  tidak boleh kosong');
            $("#password").focus();
            return false
}
        }


        </script>

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <img src="" class="img-circle" alt="User Image" height="180px" />
       <br>Member<br> Sahabat Beasiswa
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"><h3>Area Member</h3></p>
        <?php 
        if(isset($_POST['simpan'])){
        include "cek_login.php";
        }
        ?>

       <form action="" method="post" onSubmit="return cekform();">
          <div class="form-group has-feedback">
              <input type="text" class="form-control" name="email" id="email" placeholder="Isikan Email">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
             <input type="password" class="form-control" name="password" id="password" placeholder="Isikan Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-4">
               <input type="submit" class="btn btn-success" name="simpan" value="Login">
            </div><!-- /.col -->
          </div>
        </form>

        
        <div class="social-auth-links text-center">

        <p><a href="daftar.php">Daftar Anggota</a></p>
      </div><!-- /.login-box-body
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
   <?php include "admin/footer.php";?>  
   
  </body>
  
</html>