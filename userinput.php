<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php ?>
    
       <form action="userinput.php" method="get">
          Song: <input type="text" name="song">
          <br>
          Artist: <input type="text" name="artist">
          <input type="submit">
       </form>
       <br>
       Your favorite song is <?php echo $_GET["song"] ?>
        <br>
       Your favorite artist is <?php echo $_GET["artist"] ?>

</body>
</html>