<?php

include "connection.php";

if(isset($_POST['login']))
 {
    $query = SELECT * FROM 'admin_login' where 'Admin_Name' = '$_POST[AdminName]' AND 'Admin_Password'= 
    '$_POST[AdminPassword]';

    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result)==1)
    {
        echo "correct";
    } else{
        echo "incorrect";
    }
    
 }




?>