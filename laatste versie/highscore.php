<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "highscores";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_GET["niveau"]==1)
{
    $query = "INSERT INTO gemakelijk (username,punten)
        VALUES (\"".$_GET["username"]."\",".$_GET["punten"].")";
    $conn->query($query);
    
    $query = "SELECT punten FROM gemakelijk
               ORDER BY punten DESC
               LIMIT 5";
    $result = $conn->query($query);

    $punt1=$result->fetch_assoc();
    $punt2=$result->fetch_assoc();
    $punt3=$result->fetch_assoc();
    $punt4=$result->fetch_assoc();
    $punt5=$result->fetch_assoc();

    $query = "SELECT username FROM gemakelijk
    ORDER BY punten DESC
    LIMIT 5";
    
    $result = $conn->query($query);

    $user1=$result->fetch_assoc();
    $user2=$result->fetch_assoc();
    $user3=$result->fetch_assoc();
    $user4=$result->fetch_assoc();
    $user5=$result->fetch_assoc();

        
        
   $string=$user1["username"].";".$punt1["punten"].";".$user2["username"].";".$punt2["punten"].";".$user3["username"].";".$punt3["punten"].";".$user4["username"].";".$punt4["punten"].";".$user5["username"].";".$punt5["punten"];
    echo $string;
    
   

}

if ($_GET["niveau"]==2)
{
    $query = "INSERT INTO normaal (username,punten)
        VALUES (\"".$_GET["username"]."\",".$_GET["punten"].")";
    $conn->query($query);
    
    $query = "SELECT punten FROM normaal
               ORDER BY punten DESC
               LIMIT 5";
    $result = $conn->query($query);

    $punt1=$result->fetch_assoc();
    $punt2=$result->fetch_assoc();
    $punt3=$result->fetch_assoc();
    $punt4=$result->fetch_assoc();
    $punt5=$result->fetch_assoc();

    $query = "SELECT username FROM normaal
    ORDER BY punten DESC
    LIMIT 5";
    
    $result = $conn->query($query);

    $user1=$result->fetch_assoc();
    $user2=$result->fetch_assoc();
    $user3=$result->fetch_assoc();
    $user4=$result->fetch_assoc();
    $user5=$result->fetch_assoc();

        
        
   $string=$user1["username"].";".$punt1["punten"].";".$user2["username"].";".$punt2["punten"].";".$user3["username"].";".$punt3["punten"].";".$user4["username"].";".$punt4["punten"].";".$user5["username"].";".$punt5["punten"];
    echo $string;
    
   

}

if ($_GET["niveau"]==3)
{
    $query = "INSERT INTO moeilijk (username,punten)
        VALUES (\"".$_GET["username"]."\",".$_GET["punten"].")";
    $conn->query($query);
    
    $query = "SELECT punten FROM moeilijk
               ORDER BY punten DESC
               LIMIT 5";
    $result = $conn->query($query);

    $punt1=$result->fetch_assoc();
    $punt2=$result->fetch_assoc();
    $punt3=$result->fetch_assoc();
    $punt4=$result->fetch_assoc();
    $punt5=$result->fetch_assoc();

    $query = "SELECT username FROM moeilijk
    ORDER BY punten DESC
    LIMIT 5";
    
    $result = $conn->query($query);

    $user1=$result->fetch_assoc();
    $user2=$result->fetch_assoc();
    $user3=$result->fetch_assoc();
    $user4=$result->fetch_assoc();
    $user5=$result->fetch_assoc();

        
        
   $string=$user1["username"].";".$punt1["punten"].";".$user2["username"].";".$punt2["punten"].";".$user3["username"].";".$punt3["punten"].";".$user4["username"].";".$punt4["punten"].";".$user5["username"].";".$punt5["punten"];
    echo $string;
    
   

}


?>
