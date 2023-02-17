<!DOCTYPE html>

<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/wumpus.css">
</head>

<body>
<?php
    include "connect.php";


    $name = $_POST["name"];
    $email = $_POST["email"];
    $result = $_POST["result"];

    $command = "SELECT * FROM players WHERE email='$email' AND name='$name'";
    $stmt = $dbh->query($command);
    //$success = $stmt->execute();

    if($result == "win") {    
        $win = 1;
        $loss = 0;       
    } else {    
        $win = 0;
        $loss = 1;
    }
    if($stmt->rowCount() > 0)
    {
        foreach($stmt as $row){
            $win = $win+$row["win"];
            $loss = $loss+$row["loss"];
            $command = "UPDATE `players` SET `win` = '$win', `loss` = '$loss' WHERE `players`.`email` = '$email'; ";
        }
    }
    else
    {
        
        $date = date("Y-m-d");
        $command = "INSERT INTO `players` (`email`, `name`, `win`, `loss`, `last_date`) VALUES ('$email', '$name', '$win', '$loss', '$date');";
        
    }
    $dbh->query($command);
 

?>   

    <a href="index.php">Return</a>
</body>

</html>