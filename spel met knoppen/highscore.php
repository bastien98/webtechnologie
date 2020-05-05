<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "highscores";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_GET["niveau"]==1)
{
    $query = "INSERT INTO gemakelijk (punten)
        VALUES (".$_GET["punten"].")";
    $conn->query($query);
    
    $query = "SELECT punten FROM gemakelijk
               ORDER BY punten DESC
               LIMIT 5";
    $result = $conn->query($query);

    $speler1=$result->fetch_assoc();
    $speler2=$result->fetch_assoc();
    $speler3=$result->fetch_assoc();
    $speler4=$result->fetch_assoc();
    $speler5=$result->fetch_assoc();
        
        
   $string=$speler1["punten"].";".$speler2["punten"].";".$speler3["punten"].";".$speler4["punten"].";".$speler5["punten"];
    echo $string;
}

if ($_GET["niveau"]==2)
{
    $query = "INSERT INTO normaal (punten)
              VALUES (".$_GET["punten"].")";
    $conn->query($query);
    
    $query = "SELECT punten FROM normaal
               ORDER BY punten DESC
               LIMIT 5";
    $result = $conn->query($query);

    $speler1=$result->fetch_assoc();
    $speler2=$result->fetch_assoc();
    $speler3=$result->fetch_assoc();
    $speler4=$result->fetch_assoc();
    $speler5=$result->fetch_assoc();
        
        
   $string=$speler1["punten"].";".$speler2["punten"].";".$speler3["punten"].";".$speler4["punten"].";".$speler5["punten"];
    echo $string;
}

if ($_GET["niveau"]==3)
{
    $query = "INSERT INTO moeilijk (punten)
        VALUES (".$_GET["punten"].")";
    $conn->query($query);
    
    $query = "SELECT punten FROM moeilijk
               ORDER BY punten DESC
               LIMIT 5";
    $result = $conn->query($query);

    $speler1=$result->fetch_assoc();
    $speler2=$result->fetch_assoc();
    $speler3=$result->fetch_assoc();
    $speler4=$result->fetch_assoc();
    $speler5=$result->fetch_assoc();
        
        
   $string=$speler1["punten"].";".$speler2["punten"].";".$speler3["punten"].";".$speler4["punten"].";".$speler5["punten"];
    echo $string;
}


?>
