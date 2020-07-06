<?php

// http://localhost/put_api/api/putData.php
// [{
//     "name":"Fahad"
//     }]
    

    require '../dbConfig.php';
 
    $post = file_get_contents('php://input');
    $content = (array)json_decode($post, true);
    $db=new Connect;
 
    $squery="INSERT INTO titles (`name`) VALUES ('".$content[0]['name']."')";
    $result=$db->query($squery);

  
?>