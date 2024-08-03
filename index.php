<?php 
session_name('uptmsukan');
session_start();?>
<?php 

  if(isset($_POST['login'])){
 
      $username = trim(addslashes($_POST['username']));
      $password = trim(addslashes($_POST['password']));
          
      if ($username != '' && $password != '') 
      {
        include 'includes/dbconnect.php';

        $sql = "SELECT no_kadpengenalan,nama,aras FROM staf
                WHERE id_pengguna = '$username' AND katalaluan='$password'
                UNION
                SELECT no_kadpengenalan,nama,aras FROM pegawai_sukan
                WHERE id_pengguna = '$username' AND katalaluan='$password'
                UNION
                SELECT no_kadpengenalan,nama,aras FROM pelajar
                WHERE id_pengguna = '$username' AND katalaluan='$password'";

        $result = mysqli_query($dbc, $sql) or die('Query failed. ' . mysqli_error());
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        if (mysqli_num_rows($result) == 1) 
        {
          $_SESSION['user_id'] = $row['no_kadpengenalan'];
          $_SESSION['user_nama'] = $row['nama'];
          $_SESSION['user_aras']= $row['aras'];

          $nama = $_SESSION['user_nama'];

          if($_SESSION['user_aras']=='Pegawai')
          {
            echo("<SCRIPT language='javascript'>window.alert('Login successful, Welcome $nama!!');window.location='~/../s_pegawai/index.php'; </SCRIPT>");
          } 
          elseif($_SESSION['user_aras']=='Pelajar')
          {
            echo("<SCRIPT language='javascript'>window.alert('Login successful, Welcome $nama!!');window.location='~/../s_pelajar/index.php'; </SCRIPT>");
          } 
          elseif($_SESSION['user_aras']=='Staf')
          {               
            echo("<SCRIPT language='javascript'> window.alert('Login successful, Welcome $nama!!');window.location='~/../s_staf/index.php'; </SCRIPT>");          
          }  
          
        } 
        else
        {       

          $error = 'User ID or Password do not match!';
        }
            
      }
      else{
        $error = 'Please enter User ID and Password   ';
      }

   } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>UPTMSukan | SPORTS EQUIPMENT APPLICATION SYSTEM</title>
<link rel="stylesheet" type="text/css" media="all" href="assets/css/loginstyle.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<script type="text/javascript">
    
    $(document).ready(function() {      
       $("#myModal").modal('show')
    });
        
</script>

<style>

  body {
        background-image: url(images/bg.png); 
        background-repeat: repeat;

      }
  .btn-primary{
    background:#03254c;
  }


</style>


<?php if(!empty($error)): ?>

    <div class="modal fade" id="myModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Mesej</h4>
          </div>
          <div class="modal-body">
            <?php echo $error; ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

<?php endif ?>

<style>
  body{
    padding-top: 50px;
  }
</style>

</head>
<body>

<div id="superWrapper"><!--Container-->
   <div id="wrapper">
        <div id="header">     
        </div>

        <div id="bulletin">
          <div id="bulletin_new"></div>

        </div> 
            
        <div id="footer">
            <div id="footerIn"></div><!--tamat#footerIn-->
        </div><!--tamat#footer-->

        <div id="footertext">
            Copyright &copy; 2024.UPTMSukan | SPORTS EQUIPMENT APPLICATION SYSTEM.
        </div>

        <div id="bulletintext">
    <h4 class="all-h4">Announcement !</h4>
    <?php           
           $result = array(
              '<font color="black">Please login using your Student ID and Password.</font>
                ','',
           );
          
           $arrlength=count($result);
    
            for($x=0;$x<$arrlength;$x++)
            {
              echo '<span>'.$result[$x].'</span>';
              echo "<br>";
            } 
                         
       ?> 
   
  
    </div><!--tamat#bulletintext-->  
        
        <form name="formlogin" action="" method="post">
            <div id="login">
                <div id="login h4">
                  <div id="login table">
                  <table border="0" width="200px" height="100px">
                    <tr>
                      <td nowrap="nowrap" id="txt_label">&nbsp; </td>
                      <td><input class="input-medium" type="text" name="username" id="username" placeholder="Student ID" /></td>
                    </tr>
                    <tr>
                      <td id="txt_label" nowrap="nowrap">&nbsp; </td>
                      <td><input class="input-medium" type="password" name="password" id="password" placeholder="Password" /></td>
                    </tr>
                    <tr>
                      <td nowrap="nowrap"></td>
                      <td align="left">
                        <input class="btn btn-mini btn-primary" id="btn_masuk" name="login" type="submit" value="Log In"/>
                        <input class="btn btn-mini btn-danger" id="btn_semula" name="reset" type="reset" value="Again"/><br><br>
                        <font color="white" size="2" style="color:white"><a href="pendaftaran_pelajar.php">New Student Registration</a>.</font>
                      </td>

                    </tr>
                    
                  </table>  
                  </div><!--tamat#login table-->
                </div><!--tamat#login h4-->
            </div> <!--tamat#login-->  
        </form>

   </div> <!--tamat#wrapper-->
</div><!--Tutup Container-->

</body>
</html>
  