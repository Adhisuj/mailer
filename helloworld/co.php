<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <form method="post">
            
                <label for="name">Your Name</label>
                <input type="text" name="na" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email
                  
                  </label>
                <input type="email" class="form-control" name="em" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">password</label>
              <input type="password" class="form-control" name="pwd" id="subject" required>
            </div>
            <div class="text-center"><button type="submit" name="sb">Send Message</button></div>
          </form>
          <?php
          $con=mysqli_connect('localhost','root','','contact');
          if(isset($_POST['sb']))
          {
          $name=$_POST['na'];
          $email=$_POST['em'];
          $password=$_POST['pwd'];
          $query="INSERT INTO kashayab(name,email,password) values ('$name','$email','$password')";
          $run=mysqli_query($con,$query);
          }
          
          ?>
       
    </div>
</body>
</html>