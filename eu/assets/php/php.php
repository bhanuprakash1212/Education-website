<?php


    $conn =new mysqli('sql305.epizy.com','epiz_31926538','m4uJ5Vo3y3Oo','epiz_31926538_regform');
    if($conn->connection_error){
        die('connection failed :');
    }else{
        
        $email = $_REQUEST["email_address"];

      

        $stmt = $conn->prepare("INSERT INTO tdata(email) VALUES(?)");
        $stmt->bind_param("s",$email);


        $stmt->execute();
        echo "mail sent thank you for your intrest";
        $stmt->close();
        $conn->close();
    }
?>