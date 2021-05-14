<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
 
    
       <form action="mad_libs.php" method="get">
          Color: <input type="text" name="color"> <br>
          Plural Noun: <input type="text" name="pluralNoun"> <br>
          Celebrity: <input type="text" name="celebrity"> <br>
          <input type="submit">
         
       </form>
       <br><br>
      <?php
        $color =$_GET["color"];
        $pluralNoun =$_GET["pluralNoun"];
        $celebrity =$_GET["celebrity"];

        echo "Roses are $color <br>";
        echo "$pluralNou are blue <br>";
        echo "I love $celebrity <br>";


       ?>
</body>
</html>