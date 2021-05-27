<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    
       
       <form action="url.php" method="get">
          Password: <input type="password" name="password"> <br>
          <input type="submit">
       </form>

       <?php
       echo $_GET["password"];
       ?>
</body>
</html>