<?php
function head(){  ?>
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
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL  ?>assets/css/bootstrap-datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL  ?>assets/css/datepicker.css">

    <script src="<?php echo BASE_URL  ?>assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo BASE_URL  ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo BASE_URL  ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo BASE_URL  ?>assets/js/validation.js"></script>

    <script type="text/javascript" src="<?php echo BASE_URL  ?>assets/js/jquery.dataTables.nightly.js"></script>
    <script type="text/javascript" src="<?php echo BASE_URL  ?>assets/js/bootstrap-datatables.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo BASE_URL  ?>assets/js/FixedColumns.nightly.js"></script>

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

    <script type="text/javascript">
        function logout() {
          var answer = confirm("Log Out?")
          if (answer){
            window.location = "logout.php";
          }
          else{
            
          }
        }
    </script>

  </head>

  <body>
    <div class="container layout_header">
        <img src="<?php echo BASE_URL  ?>assets/css/images/header.jpg" alt="" >    
    </div>

    <?php require "navbar.php"; ?>

    <div  class="container layoutcontainer" style="text-transform:uppercase">      
      <strong><font size="2" face="Verdana, Geneva, sans-serif" color="#000"><i class="icon-user"></i> <?php echo $_SESSION['user_nama']; ?> |</font><font size="2" face="Verdana, Geneva, sans-serif" color="red"> <?php echo $_SESSION['user_aras']; ?></font> </strong>      
    </div>

    <div class="container layoutcontainer" style="height:auto">  
       <?php 
        } 
          function footer()
        {
       ?>
       <div class="breadcrumb well">
        <span><font size="2">Copyright &copy; 2024. <a href="#">UPTMSukan | SPORTS EQUIPMENT APPLICATION SYSTEM</a> </font></span><br>      
        <span><font size="2" style="font-weight:bold">UNIVERSITI POLY-TECH MALAYSIA DU060 (W) Jalan 6/91, Taman Shamelin Perkasa, 56100 Cheras, Kuala Lumpur General Tel : +603 92837186 (Marketing) Fax : +603 92810475 E-mail : marketing@uptm.edu.my</font></span> 
       </div>      
    </div>

  </body>
</html>
<?php } ?>

