<?php 
include "../lib/koneksi.php";
session_start();
if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
	
	header('location:../index.php');
}
$email=$_SESSION['email'];
$mysql=mysqli_query($link,"select * from member where email='$email'")or die(mysqli_error($link));
$data=mysqli_fetch_array($mysql);
$nama=$data['nama_lengkap'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
   
  
   
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
      <link href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
         <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- Bootstrap 3.3.2 -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="assets/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="assets/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  
    <!-- Date Picker -->
    <!-- Daterange picker -->
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
  <!--heider-->
  <div class="wrapper">
  <div class="main-header">
     <a href="index2.html" class="logo"><b>MEMBER SB</b></a>
     <nav class="navbar navbar-static-top" role="navigation">  <!-- header-->
     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
     
 <!--heider-->
 <?php include "navbar.php";?>
     
  </div>  <!-- tutup wrapper-->
  
        <!-- sidebar-->
        <aside class="main-sidebar">
        <section class="sidebar">
        
         <!-- Sidebar user panel -->
            <div class="user-panel">
            <div class="pull-left image">
              <img src="assets/foto_profil/avatar.jpg" class="img-circle img-thumbnail" alt="User Image" />
            </div>
            <div class="pull-left image">
            </div>
        
         <div class="pull-left info"> <p><?php echo $nama?></p>
         <a href="#"><i class="fa fa-circle text-success"></i><?php echo $email?><br> Online</a>
         </div>
         </div><!--div user panel-->
         
          <!--pencarian data-->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          
            <!--menu-->
         <?php include "sidebar.php";?>
            <!--menu-->
          
          <!--tutup pencarian-->
          </section>
          </aside><!--tutup sidebar-->
          
          <!--isi content-->
          <div class="content-wrapper">
          <section class="content-header">
          <h1>Dashboard<small>Control panel</small></h1>
          
          <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
          </ol>
          </section> <!--tutup secion header-->
          
          <!--isi-->
          <section class="content">

        <?php 
        include "content.php"; 
        ?>
          
          </section>
         
          <!--tutup isi -->
          
          </div>
          
          <!--tutup isi content-->
          
        
        
        
        
        
        
  


   
       


 


   
     
<?php include "footer.php";?>   

  </body>
  
</html>