<?php
//include("/include/config.php");
//include("include/functions/import.php");

$name = $_POST["name"];
$email = $_POST["email"];

if($name != "" && $email!= ""){
    
    $DBTYPE = 'mysql';
    $DBHOST = 'localhost';
    $DBUSER = 'seeqe123_usrbt7j';
    $DBPASSWORD = 'E}cAQyZTtq~^';
    $DBNAME = 'seeqe123_qanda15';
        
    $connection = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
    if ($connection->connect_errno){
        echo "Failed to connect to MySQL: " . $connection->connect_error;
    }	
    $sql = "INSERT INTO `subscribers` (`id` ,`name`, `email`)VALUES (NULL,'".$name."', '".$email."');";
    $result = $connection->query($sql);
    echo json_encode($result);
    
//    global $conn;
//    $query = "INSERT INTO `subscribers` (`id` ,`name`, `email`)VALUES (NULL,'".$name."', '".$email."');";
////    $query = "SELECT * from categories";
//    $conn->debug=1;
//    $result = $conn->Execute($query);
//    echo "executed<br>";
//	echo "<".$result.">";
}
?>