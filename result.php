

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


    $row = $_GET["row"];
    $col = $_GET["column"];

    $count = $_GET["count"];

    $command = "SELECT * FROM wump WHERE row=$row AND col=$col";
    $stmt = $dbh->query($command);
    //$success = $stmt->execute();
    $result = "win"; 

    if($stmt->rowCount() > 0)
    {
        echo "You Won <br/>"; 

        ?>
        <img src="/Project/winner.jpg" width="280" height="125" title="Logo of a company" alt="Logo of a company" />
        <?php
    }
    else
    {
        $result = "Lost";
        echo "You Fail";
        //echo '<br><a href="index.php?count='.$count.'">Return</a>';
    }

?>   
    <form action="save.php" method="POST">
        <label for="name">name</label>
        <input  type="text" name="name"/>
        
        <label for="email">email</label>
        <input type="email" name="email"/>
        
        <input type="hidden" name="result" value="<?php echo $result ?>"/>

        <input type="submit" value="Save"/>
    </form> 
</body>

</html>