<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="arrays.php" method="post">
        Password: <input type="text" name="student"> <br>
        <input type="submit">

        <?php

        $grades = array("Rose" => "A+", "Pam" => "B-", "Mary" => "C+");
         echo $grades[$_POST["student"]];
        ?>

</body>

</html>