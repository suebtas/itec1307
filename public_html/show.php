<html>
<head>
</head>
<body>
<?php
    $host = 'mysql';
    $user = 'root';
    $pass = 'itlab';
    $database = 'shopping';
    $connect = new mysqli($host, $user, $pass,  $database);
    if ($mysqli->connect_error) {
        die('Please, check your server connection. Connect Error (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    $query = "SELECT item_code, item_name, description, imagename, price FROM products";
    $results = $connect->query($query) or die(mysql_error());
    echo "<table border=\"0\">";
    $x=1;
    echo "<tr>";
    while ($row = $results->fetch_assoc())  {
        if ($x <= 3)
        {
            $x = $x + 1;
            extract($row);
            echo "<td style=\"padding-right:15px;\">";
            echo "<a href=itemdetails.php?itemcode=$item_code>";
            echo '<img src=' . $imagename . ' style="max-width:220px;max-height:240px; width:auto;height:auto;"></img><br/>';
            echo $item_name .'<br/>';
            echo "</a>";
            echo '$'.$price .'<br/>';
            echo "</td>";
        }else{
                $x=1;
                echo "</tr><tr>";
        }
    }
    echo "</table>";
?>
</body>
</html>