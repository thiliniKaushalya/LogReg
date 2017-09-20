
<?php

require "x.php";


?>

<!DOCTYPE html>



<html lang="en">




<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 <p> $umail</p>
<div class="container">
  <form  method="post">
  	<div class="col-md-6">
  	
 <div class="form-group">
    <label for="Email">Email </label>
    <input type="email" name="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
   
  </div>

  <div class="form-group">
    <label for="Password">Password</label>
    <input type="Password" name="password" class="form-control" id="Password" placeholder="Password">
  </div>
   
  <button type="submit" class="btn btn-primary" name="btn-login">Submit</button>
</form>

</div>
</div>
</body>
</html>