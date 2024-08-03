<?php

define('DOC_ROOT', realpath(dirname(__FILE__) . '/'));
define('BASE_URL', 'http://localhost/uptmsukan/');

?>

<?php

  if(isset($_POST['daftar'])){

    $id_pengguna  = $_POST["id_pengguna"];
    $nama  = $_POST["nama"];
    $no_kadpengenalan  = $_POST["no_kadpengenalan"];
    $no_telefon  = $_POST["no_telefon"];
    $emel  = $_POST["emel"];

    require 'includes/dbconnect.php';

    $katalaluan  = $_POST["katalaluan"];
    $sahkatalaluan  = $_POST["sahkatalaluan"];

    if($katalaluan==$sahkatalaluan){

      $sql_pelajar = "INSERT INTO pelajar (id_pengguna,nama,no_kadpengenalan,emel,no_telefon,katalaluan) VALUES 
                ('$id_pengguna','$nama','$no_kadpengenalan','$emel','$no_telefon','$katalaluan')";    

      mysqli_query($dbc, $sql_pelajar) or die('Query failed. ' . mysqli_error());

      print "<script>";
      print "alert('Pendaftaran berjaya disimpan'); self.location='index.php';"; 
      print "</script>"; 

    }else{

      print "<script>";
      print "alert('Katalaluan dan Sah Katalaluan tidak sepadan'); self.location='pendaftaran_pelajar.php';"; 
      print "</script>"; 

    }

  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UPTMSukan | SPORTS EQUIPMENT APPLICATION SYSTEM</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL  ?>assets/css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL  ?>assets/css/bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL  ?>assets/css/bootstrap.cus.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL  ?>assets/css/bootstrap_custom.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL  ?>assets/css/sistemkik.css"/>

    <script src="<?php echo BASE_URL  ?>assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo BASE_URL  ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo BASE_URL  ?>assets/js/validation.js"></script>


    <style type="text/css">

      body {
        background-image: url(<?php echo BASE_URL ?>images/bg.png); 
        background-repeat: repeat;
        background-color: #eee;
        font-family: Arial;
        font-size: 12px;
        color: black;
      }

    </style>

    <style>

      select,
      textarea,
      input[type="text"],
      input[type="password"],
      input[type="datetime"],
      input[type="datetime-local"],
      input[type="date"],
      input[type="month"],
      input[type="time"],
      input[type="week"],
      input[type="number"],
      input[type="email"],
      input[type="url"],
      input[type="search"],
      input[type="tel"],
      input[type="color"],
      .uneditable-input{

         border: 1px solid #CCC;
         color:black;
        -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
                border-radius: 3px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
           -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
           -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
            -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
             -o-transition: border linear 0.2s, box-shadow linear 0.2s;
                transition: border linear 0.2s, box-shadow linear 0.2s;

      }

      .btn-primary{
        background-color: #03254c;
      }

      .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
        background: #33a6cc;
      }

      .btn-danger{
        background-color: #DF344D;
      }

      .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger {
        background: #33a6cc;
      }
      
      .accordion-group{
        border-color: #CCC;
      }
     

    </style>

    <style>
    .pagination ul > li > a, .pagination ul > li > span
    {
     
      border: 1px solid #ccc;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
           -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
           -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
            -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
             -o-transition: border linear 0.2s, box-shadow linear 0.2s;
                transition: border linear 0.2s, box-shadow linear 0.2s;  
                 
    }
    .pagination ul > li > a:hover,
    .pagination ul > .active > a,
    .pagination ul > .active > span,
    .pagination ul > .MarkupPagerNavOn > a,
    .pagination ul > .MarkupPagerNavOn > span {
      background-color: #DF344D;
    }


    }
    </style>

  </head>

  <body>
    <div class="container layout_header">
        <img src="<?php echo BASE_URL  ?>assets/css/images/header.jpg" alt="" >    
    </div>

    <?php require "navbar.php"; ?>

    <div  class="container layoutcontainer" style="text-transform:uppercase">      
      <strong><font size="2" face="Verdana, Geneva, sans-serif" color="#000"><i class="icon-user"></i> New Student Register</font> </strong>      
    </div>

    <div class="container layoutcontainer" style="height:auto">  
       
<div id="stylized" class="accordion-group breadcrumb">
    <legend><h4><strong><font size="4" color="#333">Student Information</font></strong></h4></legend>
    <hr/>

    <form name="mak_dftr" id="mak_dftr" action="" method="post"  autocomplete="off" >
          <table width="600" border="0">
             <tr>
              <td width="112" align="right" nowrap="nowrap" ><label class="control-label">Student ID :</label></td>
              <td width="478" ><input  class="input-medium" type="text" name="id_pengguna" id="id_pengguna" /></td>
            </tr> 

            <tr>
              <td width="112" align="right" nowrap="nowrap" ><label class="control-label">Student's name :</label></td>
              <td width="478" ><input  class="input-xlarge" type="text" name="nama" id="nama" /></td>
            </tr>
            
            <tr>
              <td width="112" align="right" nowrap="nowrap" ><label class="control-label">No. Identification card :</label></td>
              <td width="478" ><input  class="input-medium" type="text" name="no_kadpengenalan" id="no_kadpengenalan" /></td>
            </tr>
            <tr>
              <td width="112" align="right" nowrap="nowrap" ><label class="control-label">Email :</label></td>
              <td width="478" ><input  class="input-xlarge" type="text" name="emel" id="emel" /></td>
            </tr>

            <tr>
              <td width="112" align="right" nowrap="nowrap" ><label class="control-label">No. Telephone :</label></td>
              <td width="478" ><input  class="input-medium" type="text" name="no_telefon" id="no_telefon" /></td>
            </tr>

            <tr>
              <td width="112" align="right" nowrap="nowrap" ><label class="control-label">Password :</label></td>
              <td width="478" ><input  class="input-medium" type="password" name="katalaluan" id="katalaluan" /></td>
            </tr>
            <tr>
              <td width="112" align="right" nowrap="nowrap" ><label class="control-label">Repeat Password :</label></td>
              <td width="478" ><input  class="input-medium" type="password" name="sahkatalaluan" id="sahkatalaluan" /></td>
            </tr>
            

          </table>
          
           <div  class="form-actions">
              <input name="daftar" type="submit" class="btn btn-primary"  value="Register" />
              <input name="Reset" type="reset" class="btn btn-danger"  value="Again" />      
          </div> 
  
    </form><br>
</div>

<br />
       <div class="breadcrumb well">
        <span><font size="2">Copyright &copy; 2024. <a href="#">SPORTS EQUIPMENT APPLICATION SYSTEM</a> </font></span><br>      
        <span><font size="2" style="font-weight:bold">UNIVERSITI POLY-TECH MALAYSIA DU060 (W) Jalan 6/91, Taman Shamelin Perkasa, 56100 Cheras, Kuala Lumpur General Tel : +603 92837186 (Marketing) Fax : +603 92810475 E-mail : marketing@uptm.edu.my</font></span> 
       </div>      
    </div>

  </body>
</html>


