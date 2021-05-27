<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    
    
       
       <form action="checkbox.php" method="post">
          Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
          Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
          Coconuts: <input type="checkbox" name="fruits[]" value="coconuts"> <br>
          Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
          <input type="submit">
       </form>

       <?php
       $fruits = $_POST["fruits"];
       echo $fruits[0];
       ?>
</body>
</html>