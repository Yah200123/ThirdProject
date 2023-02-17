<!DOCTYPE html>
<!-- Hunt the Wumpus Starter Code. Do not change!
Sam Scott, Mohawk College, 2021 -->
<html>

<head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/wumpus.css">
</head>

<body>
    <div id="container">
        <h1>Hunt the Wumpus!</h1>
        <table>
            <?php
            $count = 0;
            if(isset($_GET["count"])) {
                $count = $_GET["count"] + 1;
            }
            for ($r=1; $r<=7;$r++) {
                echo "<tr>";
                for ($c=1; $c<=7; $c++) {
                    echo "<td><a href='result.php?row=$r&column=$c&count=$count'></a></td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>