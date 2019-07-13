
<?php
  include 'database/connection.php'; 
  /* PHP MAILER LIBRARY */
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'phpmailer/src/Exception.php';
  require 'phpmailer/src/PHPMailer.php';
  require 'phpmailer/src/SMTP.php';

  $error ='';
  $length ='';
  $pwd='';
  $email_check='';
  if(isset($_POST['register'])){
    /* Sanitaze The Input Data */
    $name = mysqli_escape_string($conn,$_POST['name']);
    $email = mysqli_escape_string($conn,$_POST['email']);
    $password = mysqli_escape_string($conn,$_POST['password']);
    $confirmPassword = mysqli_escape_string($conn,$_POST['confirmpassword']);
    $mobile = mysqli_escape_string($conn,$_POST['mobile']);

    /* Check Email Exist Or Not */
    $email_exist = "SELECT email FROM users WHERE email ='$email'";
    $query = mysqli_query($conn,$email_exist);

    if(mysqli_num_rows($query)>0){
      $email_check = "You email is already existed";
    }
    
    /* The Input Can not be Empty */
    else if(empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($mobile)){
      $error = "This field is required";
    }

    /* The Length of field name must be grater than 4 */
    else if(strlen($name)<5){
      $length = "Length must be greater than 4";
    }

    /* Password have to match with with confirm password */
    else if($password!=$confirmPassword){
      $pwd="Your Password Does Not Match";
    }
    else{
      /* Encrypted password */
      $password = md5($password);

      /* Generate a new verification key with encryption */
      $vkey = md5(time().$email);

      /* Insert Data into users table */
      $sql = "INSERT INTO users (name,email,password,mobile,v_key,v_status) VALUES ('$name','$email','$password','$mobile','$vkey',0)";
      $query = mysqli_query($conn,$sql);

      if($query){
        $mail = new PHPMailer;
        //* set phpmailer to use SMTP */
        $mail->isSMTP();
        /* smtp host */
        $mail->Host = "smtp.gmail.com";

        $mail->SMTPAuth = true;
        
        /* Provide Users Name and Password as your email address(FromEmail) */
        $mail->Username = "ferdousbaf212@gmail.com";

        $mail->Password = "ferdous_baf_212";

        $mail->SMTPSecure ="tls";

        $mail->Port= 587;

        $mail->From = "ferdousbaf212@gmail.com";

        $mail->FromName = "Ferdous";

        $mail->addAddress($email,"Ferdous Ali");

        $mail->isHTML(true);
        /* Set Subject and messages of body */
        $mail->Subject = "Email Verification From socialentertainment";

        $mail->Body = "<a href='http://localhost/socialentertainment/registration/verify.php?vkey=$vkey'>Click This Activation Link</a>";

            if(!$mail->send()){
              echo "Mailer Error". $mail->ErrorInfo;
            }
            else{
              echo "<script>alert('Verification Has been Sent Successfully')</script>";
            }

            header('location:success.php');
            
          }else{
            echo mysqli_error($conn);
          } 

      }
    }
    
  ?>

<!doctype html>
<html lang="en">
  <?php include 'layout/css/css-register.php';?>
  <body>
      
    <div class="container signup-form">

      <form class="modal-contentR" action="?" method="POST">
        
        <h2 class="heading">Registration</h2>
               
        <div class="container">
          <label for="name"><b>Name</b></label>
          <input type="text" id="name" placeholder="Enter your name" name="name">
          <span class="error"><?=$error;?><?=$length;?></span>

          <label for="email"><b>Email</b></label>
          <input type="email" id="email" placeholder="Enter your email" name="email">
          <span class="error"><?=$error;?><?=$email_check;?></span>

          <label for="pwd"><b>Password</b></label>
          <input type="password" id="pwd" placeholder="Enter Password" name="password">
          <span class="error"><?=$error;?></span>

          <label for="confirmpassword"><b>Confirm Password</b></label>
          <input type="password"id="confirmpassword" placeholder="Confirm Password" name="confirmpassword">
          <span class="error"><?=$error;?><?=$pwd;?></span>

          <label for="mobile"><b>Mobile Number</b></label>
          <input type="mobile"id="mobile" placeholder="Enter Mobile Number" name="mobile">
          <span class="error"><?=$error;?></span>

        </div>
       <!--  <div class="form-group">
          <label class="checkbox-inline"><input class="text" type="checkbox" required=""> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
        </div> -->
        
          <center><button type="submit" class="mybtn" name="register">Register Now</button></center>  
       
      </form>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>

    </div>
    <!-- JAVASCRIPTS --> 
    <script src="../layout/scripts/jquery.min.js"></script> 
    <script src="../layout/scripts/jquery.fitvids.min.js"></script>
    <script src="../layout/scripts/bootstrap-v4.3.1.min.js"></script>
    
  </body>
</html>