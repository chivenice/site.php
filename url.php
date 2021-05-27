<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    
       
       <form action="url.php" method="post">
          Password: <input type="password" name="password"> <br>
          <input type="submit">
       </form>

       <?php
       //Use POST to Secure user Information 
       echo $_POST["password"];
       ?>
</body>
</html>