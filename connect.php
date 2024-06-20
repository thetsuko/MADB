<?php
    $db = mysqli_connect('localhost','root','root','basic_php_crud');
    if($db == true){
        echo "database connected successfylly";
    }else{
        die('Error:'. mysqli_connect_error($db));
    }
    
    
?>