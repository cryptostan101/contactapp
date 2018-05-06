<?php

  // set message variables
  $msg = '';
  $msgclass = '';

  // check form if Submit
  if(filter_has_var(INPUT_POST, 'submit')){

      // get form data
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $message= htmlspecialchars($_POST['message']);

      // check required fields

      if(!empty($email) && !empty($name) && !empty($message)){

          // form email check
          if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){

            // set message to fail
            $msg = 'Please use a valid email address';
            $msgclass = 'alert-danger';

          }
          else{

            $toemail = 'joelarkin2010@gmail.com';
            $subject = 'Contact Request From'.$name;
            $body = '<h2> Contact Request </h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>

            ';

            // set headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" ."\r\n";

            // set additional $headers
            $headers .="From: " .$name. "<".$email.">". "\r\n";

            // use php mail function
            if(mail($toemail, $subject, $body, $headers)){

              $msg = 'Your email has been sent';
              $msgclass = 'alert-success';

            }
            else{

              $msg = 'Your email has not been sent';
              $msgclass = 'alert-danger';


            }


          }

      }
      else{

          // form failed empty check
          $msg = 'Please fill in all fields';
          $msgclass = 'alert-danger';

      }
  }




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css" >
  <title>Contact Form</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container">
    		<div class="navbar-header">

    			<a class="navbar-brand" href="index.php"> My Website</a>
          	<a class="navbar-brand" href="display-info.php"> Server Info</a>

    		</div>
     </div>
   </nav>

   <div class="container">
      <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgclass; ?>"> <?php echo $msg; ?> </div>
      <?php endif; ?>
    	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    		<div class="form-group">
    		  <label>Name</label>
    		  <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo isset($_POST['name']) ? $name : ''; ?> ">
    		</div>

    		<div class="form-group">
    		  <label>Email address</label>
    		  <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo isset($_POST['email']) ? $email : ''; ?> ">
    		  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    		</div>

    		<div class="form-group">
    		  <label>Message</label>
    		  <textarea name="message" class="form-control" rows="3">  <?php echo isset($_POST['message']) ? $message : ''; ?> </textarea>
    		</div>

    		<button type="submit" name="submit" class="btn btn-primary">Submit</button>

    	</form>


   </div>


</body>
</html>
